<?php

namespace Scrumpy\ProseMirrorToHtml\Marks;

class Bold extends Mark
{
    public function matching()
    {
        return $this->mark->type === 'bold';
    }

    public function tag()
    {
        return 'strong';
    }
}
