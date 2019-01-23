<?php

namespace Scrumpy\ProseMirrorToHtml\Marks;

class Italic
{
    protected $mark;

    function __construct($mark)
    {
        $this->mark = $mark;
    }

    public function matching()
    {
        return $this->mark->type === 'italic';
    }

    public function tag()
    {
        return 'em';
    }
}
