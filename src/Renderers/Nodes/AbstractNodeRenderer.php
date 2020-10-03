<?php


namespace ProseMirrorToHtml\Renderers\Nodes;

use ReflectionClass;
use ProseMirrorToHtml\Helpers\StringHelper;

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
