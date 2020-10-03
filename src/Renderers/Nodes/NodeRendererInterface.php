<?php


namespace ProseMirrorToHtml\Renderers\Nodes;


use ProseMirrorToHtml\Renderers\RendererInterface;

interface NodeRendererInterface extends RendererInterface
{
    /**
     * @return bool
     */
    public function isSelfClosing();

    /**
     * @return string|null
     */
    public function getText($node);
}