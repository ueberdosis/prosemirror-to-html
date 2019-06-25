<?php

namespace Scrumpy\ProseMirrorToHtml\Test\Marks\Custom;

use Scrumpy\ProseMirrorToHtml\Marks\Mark;

class Superscript extends Mark
{
    public function matching()
    {
        return $this->mark->type === 'superscript';
    }

    public function tag()
    {
        return 'sup';
    }
}
