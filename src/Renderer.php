<?php

namespace Scrumpy\ProseMirrorToHtml;

class Renderer
{
    protected $document;

    protected $nodes = [
        Nodes\Heading::class,
        Nodes\Paragraph::class,
    ];

    protected $marks = [
        Marks\Bold::class,
        Marks\Code::class,
        Marks\Italic::class,
    ];

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

        if (isset($node->marks)) {
            foreach ($node->marks as $mark) {
                foreach ($this->marks as $class) {
                    $renderClass = new $class($mark);

                    if ($renderClass->matching()) {
                        $html[] = $this->renderOpeningTag($renderClass->tag());
                    }
                }
            }
        }

        foreach ($this->nodes as $class) {
            $renderClass = new $class($node);

            if ($renderClass->matching()) {
                $html[] = $this->renderOpeningTag($renderClass->tag());
            }
        }

        if (isset($node->content)) {
            foreach ($node->content as $nestedNode) {
                $html[] = $this->renderNode($nestedNode);
            }
        } elseif (isset($node->text)) {
            $html[] = $node->text;
        } elseif ($text = $renderClass->text()) {
            $html[] = $text;
        }

        foreach ($this->nodes as $class) {
            $renderClass = new $class($node);

            if ($renderClass->matching()) {
                $html[] = $this->renderClosingTag($renderClass->tag());
            }
        }

        if (isset($node->marks)) {
            foreach (array_reverse($node->marks) as $mark) {
                foreach ($this->marks as $class) {
                    $renderClass = new $class($mark);

                    if ($renderClass->matching()) {
                        $html[] = $this->renderClosingTag($renderClass->tag());
                    }
                }
            }
        }

        return join($html);
    }

    private function renderOpeningTag($tag)
    {
        if (!$tag) {
            return null;
        }

        return "<{$tag}>";
    }

    private function renderClosingTag($tag)
    {
        if (!$tag) {
            return null;
        }

        return "</{$tag}>";
    }

    public function render($value)
    {
        $this->document($value);

        $html = [];

        foreach ($this->document->content as $node) {
            $html[] = $this->renderNode($node);
        }

        return join($html);
    }

    public function addNode($node)
    {
        $this->nodes[] = $node;
    }
}

