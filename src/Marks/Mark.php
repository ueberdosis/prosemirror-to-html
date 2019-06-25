<?php

namespace Scrumpy\ProseMirrorToHtml\Marks;

class Mark
{
    protected $mark;

    public function __construct($mark)
    {
        $this->mark = $mark;
    }

    public function matching()
    {
        return false;
    }

    public function tag()
    {
        return null;
    }
}
