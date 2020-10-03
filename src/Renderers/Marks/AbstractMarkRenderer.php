<?php


namespace ProseMirrorToHtml\Renderers\Marks;

use ReflectionClass;
use ProseMirrorToHtml\Helpers\StringHelper;

abstract class AbstractMarkRenderer implements MarkRendererInterface
{
    /**
     * @inheritDoc
     */
    public static function supportedType()
    {
        return StringHelper::toCamelCase((new ReflectionClass(static::class))->getShortName());
    }
}
