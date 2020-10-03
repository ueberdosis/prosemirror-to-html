<?php

namespace ProseMirrorToHtml;

use ProseMirrorToHtml\Exceptions\RendererNotFoundException;
use ProseMirrorToHtml\Registry\Factory;
use ProseMirrorToHtml\Registry\RendererRegistry;

class Renderer
{
    protected $document;

    /**
     * @var RendererRegistry
     */
    protected $nodesRendererRegistry;

    /**
     * @var RendererRegistry
     */
    protected $marksRendererRegistry;

    public function __construct(
        RendererRegistry $nodesRendererRegistry = null,
        RendererRegistry $marksRendererRegistry = null
    )
    {
        $this->nodesRendererRegistry = $nodesRendererRegistry ?? Factory::buildNodesRegistry();
        $this->marksRendererRegistry = $marksRendererRegistry ?? Factory::buildMarksRegistry();
    }

    public function document($value)
    {
        if (is_string($value)) {
            $value = json_decode($value);
        } elseif (is_array($value)) {
            $value = json_decode(json_encode($value));
        }

        $this->document = $value;

        return $this;
    }

    private function renderNode($node)
    {
        $html = [];

        if (is_object($node)) {
            if (isset($node->marks)) {
                foreach ($node->marks as $mark) {
                    if (is_object($mark)) {
                        try {
                            $markRenderer = $this->marksRendererRegistry->get($mark->type);
                            $renderedTag = $markRenderer->getTag($mark);
                            $html[] = $this->renderOpeningTag($renderedTag);
                        } catch (RendererNotFoundException $e) {
                            //continue
                        }
                    }
                }
            }

            try {
                $nodeRenderer = $this->nodesRendererRegistry->get($node->type);
                $renderedNodeTag = $nodeRenderer->getTag($node);
                $html[] = $this->renderOpeningTag($renderedNodeTag);
            } catch (RendererNotFoundException $e) {
                $nodeRenderer = null;
            }


            if (isset($node->content)) {
                foreach ($node->content as $nestedNode) {
                    $html[] = $this->renderNode($nestedNode);
                }
            } elseif (isset($node->text)) {
                $html[] = htmlentities($node->text, ENT_QUOTES);
            } elseif ($nodeRenderer && $text = $nodeRenderer->getText($node)) {
                $html[] = $text;
            }

            if ($nodeRenderer && !$nodeRenderer->isSelfClosing()) {
                $html[] = $this->renderClosingTag($renderedNodeTag);
            }


            if (isset($node->marks)) {
                foreach (array_reverse($node->marks) as $mark) {
                    if (is_object($mark)) {
                        try {
                            $markRenderer = $this->marksRendererRegistry->get($mark->type);
                            $renderedTag = $markRenderer->getTag($mark);
                            $html[] = $this->renderClosingTag($renderedTag);
                        } catch (RendererNotFoundException $e) {
                            //continue
                        }
                    }
                }
            }
        }

        return join($html);
    }

    private function renderOpeningTag($tags)
    {
        $tags = (array) $tags;

        if (!$tags || !count($tags)) {
            return null;
        }

        return join('', array_map(function ($item) {
            if (is_string($item)) {
                return "<{$item}>";
            }

            $attrs = '';
            if (isset($item['attrs'])) {
                foreach ($item['attrs'] as $attribute => $value) {
                    $attrs .= " {$attribute}=\"{$value}\"";
                }
            }

            return "<{$item['tag']}{$attrs}>";
        }, $tags));
    }

    private function renderClosingTag($tags)
    {
        $tags = (array) $tags;
        $tags = array_reverse($tags);

        if (!$tags || !count($tags)) {
            return null;
        }

        return join('', array_map(function ($item) {
            if (is_string($item)) {
                return "</{$item}>";
            }

            return "</{$item['tag']}>";
        }, $tags));
    }

    public function render($value)
    {
        $this->document($value);

        $html = [];

        $content = is_array($this->document->content) ? $this->document->content : [];

        foreach ($content as $node) {
            $html[] = $this->renderNode($node);
        }

        return join($html);
    }
}
