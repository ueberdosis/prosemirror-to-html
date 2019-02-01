<?php

namespace Scrumpy\ProseMirrorToHtml\Nodes;

class ListItem
{
    protected $node;

    function __construct($node)
    {
        $this->node = $node;
    }

    public function matching()
    {
        return $this->node->type === 'list_item';
    }

    public function tag()
    {
        return 'li';
    }
}
