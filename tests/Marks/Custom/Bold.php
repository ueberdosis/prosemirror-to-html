<?php

namespace ProseMirrorToHtml\Test\Marks\Custom;

use ProseMirrorToHtml\Marks\Mark;

class Bold extends Mark
{
    protected $markType = 'bold';
    protected $tagName = 'b';
}
