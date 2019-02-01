<?php

namespace Scrumpy\ProseMirrorToHtml\Marks;

class Underline
{
    protected $mark;

    function __construct($mark)
    {
        $this->mark = $mark;
    }

    public function matching()
    {
        return $this->mark->type === 'underline';
    }

    public function tag()
    {
        return 'u';
    }
}
