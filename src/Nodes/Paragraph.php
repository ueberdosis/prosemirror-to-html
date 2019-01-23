<?php

namespace Scrumpy\ProseMirrorToHtml\Nodes;

class Paragraph
{
    protected $node;

    function __construct($node)
    {
        $this->node = $node;
    }

    public function matching()
    {
        return $this->node->type === 'paragraph';
    }

    public function tag()
    {
        return 'p';
    }
}
