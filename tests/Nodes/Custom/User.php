<?php

namespace Scrumpy\ProseMirrorToHtml\Test\Nodes\Custom;

class User
{
    protected $node;

    function __construct($node)
    {
        $this->node = $node;
    }

    public function matching()
    {
        return $this->node->type === 'user';
    }

    public function tag()
    {
        return 'span';
    }
}
