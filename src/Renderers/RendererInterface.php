<?php


namespace ProseMirrorToHtml\Renderers;


interface RendererInterface
{
    /**
     * @return string
     */
    public static function supportedType();

    /**
     * @param $node
     * @return string|array
     */
    public function getTag($node);

}