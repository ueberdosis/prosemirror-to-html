<?php


namespace ProseMirrorToHtml\Renderers\Nodes;


use ProseMirrorToHtml\Helpers\StringHelper;
use ReflectionClass;

abstract class AbstractNodeRenderer implements NodeRendererInterface
{
    /**
     * @inheritDoc
     */
    public static function supportedType()
    {
        return StringHelper::toCamelCase((new ReflectionClass(static::class))->getShortName());
    }

    /**
     * @inheritDoc
     */
    public function isSelfClosing()
    {
        return false;
    }

    public function getText($node)
    {
        return null;
    }
}