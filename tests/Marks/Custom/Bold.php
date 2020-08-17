<?php

namespace Scrumpy\ProseMirrorToHtml\Test\Marks\Custom;

use Scrumpy\ProseMirrorToHtml\Marks\Mark;

class Bold extends Mark
{
    protected $markType = 'bold';
    protected $tagName = 'b';
}
