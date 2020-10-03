<?php

namespace ProseMirrorToHtml\Test\Marks\Custom;

use ProseMirrorToHtml\Marks\Mark;
use ProseMirrorToHtml\Renderers\Marks\AbstractMarkRenderer;

class CustomMark extends AbstractMarkRenderer
{
    public function getTag($mark)
    {
        return 'custom_mark';
    }
}
