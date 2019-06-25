<?php

namespace Scrumpy\ProseMirrorToHtml\Nodes;

class Node
{
    protected $node;

    function __construct($node)
    {
        $this->node = $node;
    }

    public function matching()
    {
        return false;
    }

    public function selfClosing()
    {
        return false;
    }

    public function tag()
    {
        return null;
    }

    public function text()
    {
        return null;
    }
}
