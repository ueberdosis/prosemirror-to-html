<?php

namespace Scrumpy\ProseMirrorToHtml\Nodes;

class UnorderedList extends Node
{
    public function matching()
    {
        return $this->node->type === 'bullet_list';
    }

    public function tag()
    {
        return 'ul';
    }
}
