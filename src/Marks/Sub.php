<?php

namespace Scrumpy\ProseMirrorToHtml\Marks;

class Sub extends Mark
{
    public function matching()
    {
        return $this->mark->type === 'sub';
    }

    public function tag()
    {
        return 'sub';
    }
}
