<?php

declare(strict_types = 1);

namespace ProseMirrorToHtml\Registry;

use ProseMirrorToHtml\Renderers\RendererInterface;
use ProseMirrorToHtml\Exceptions\RendererNotFoundException;

class RendererRegistry
{
    /**
     * @var RendererInterface[]
     */
    protected $renderers = [];

    /**
     * RendererRegistry constructor.
     * @param RendererInterface[] $renderers
     */
    public function __construct(array $renderers = [])
    {
        $this->add($renderers);
    }

    /**
     * @param RendererInterface|RendererInterface[] $renderers
     */
    public function add($renderers)
    {
        if (is_array($renderers)) {
            foreach ($renderers as $renderer) {
                $this->add($renderer);
            }

            return;
        }

        $this->renderers[$renderers::supportedType()] = $renderers;
    }

    /**
     * @param string $type
     * @return RendererInterface
     */
    public function get($type)
    {
        if (!isset($this->renderers[$type])) {
            throw new RendererNotFoundException(sprintf('Renderer for type "%s" not found', $type));
        }

        return $this->renderers[$type];
    }
}
