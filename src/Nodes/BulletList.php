<?php

namespace Scrumpy\ProseMirrorToHtml\Nodes;

class BulletList
{
    protected $node;

    function __construct($node)
    {
        $this->node = $node;
    }

    public function matching()
    {
        return $this->node->type === 'bullet_list';
    }

    public function tag()
    {
        return 'ul';
    }
}
