<?php

namespace Scrumpy\ProseMirrorToHtml\Nodes;

class ListItem extends Node
{
    public function matching()
    {
        return $this->node->type === 'list_item';
    }

    public function tag()
    {
        return 'li';
    }
}
