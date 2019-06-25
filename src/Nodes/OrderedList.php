<?php

namespace Scrumpy\ProseMirrorToHtml\Nodes;

class OrderedList extends Node
{
    public function matching()
    {
        return $this->node->type === 'ordered_list';
    }

    public function tag()
    {
        return 'ol';
    }
}
