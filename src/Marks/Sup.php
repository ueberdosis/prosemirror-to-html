<?php

namespace Scrumpy\ProseMirrorToHtml\Marks;

class Sup extends Mark
{
    public function matching()
    {
        return $this->mark->type === 'sup';
    }

    public function tag()
    {
        return 'sup';
    }
}
