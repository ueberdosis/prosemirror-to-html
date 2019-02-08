<?php

namespace Scrumpy\ProseMirrorToHtml\Marks;

class Italic extends Mark
{
    public function matching()
    {
        return $this->mark->type === 'italic';
    }

    public function tag()
    {
        return 'em';
    }
}
