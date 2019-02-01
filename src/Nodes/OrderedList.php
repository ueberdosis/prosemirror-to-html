<?php

namespace Scrumpy\ProseMirrorToHtml\Nodes;

class OrderedList
{
    protected $node;

    function __construct($node)
    {
        $this->node = $node;
    }

    public function matching()
    {
        return $this->node->type === 'ordered_list';
    }

    public function tag()
    {
        return 'ol';
    }
}
