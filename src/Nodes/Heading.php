<?php

namespace Scrumpy\ProseMirrorToHtml\Nodes;

class Heading
{
    protected $node;

    function __construct($node)
    {
        $this->node = $node;
    }

    public function matching()
    {
        return $this->node->type === 'heading';
    }

    public function tag()
    {
        return "h{$this->node->attrs->level}";
    }
}
