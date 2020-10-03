<?php


namespace ProseMirrorToHtml\Renderers\Marks;


use ProseMirrorToHtml\Helpers\StringHelper;
use ProseMirrorToHtml\Renderers\RendererInterface;
use ReflectionClass;

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