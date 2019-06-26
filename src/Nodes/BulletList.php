<?php

namespace Scrumpy\ProseMirrorToHtml\Nodes;

class BulletList extends Node
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
