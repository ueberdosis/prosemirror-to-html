<?php

namespace Scrumpy\ProseMirrorToHtml\Marks;

class Strike extends Mark
{
    public function matching()
    {
        return $this->mark->type === 'strike';
    }

    public function tag()
    {
        return 'strike';
    }
}
