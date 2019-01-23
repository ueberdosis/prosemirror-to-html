<?php

namespace Scrumpy\ProseMirrorToHtml\Marks;

class Code
{
    protected $mark;

    function __construct($mark)
    {
        $this->mark = $mark;
    }

    public function matching()
    {
        return $this->mark->type === 'code';
    }

    public function tag()
    {
        return 'code';
    }
}
