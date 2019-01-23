<?php

namespace Scrumpy\ProseMirrorToHtml\Marks;

class Bold
{
    protected $mark;

    function __construct($mark)
    {
        $this->mark = $mark;
    }

    public function matching()
    {
        return $this->mark->type === 'bold';
    }

    public function tag()
    {
        return 'strong';
    }
}
