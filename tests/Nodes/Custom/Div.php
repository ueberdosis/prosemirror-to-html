<?php

namespace Scrumpy\ProseMirrorToHtml\Test\Nodes\Custom;

use Scrumpy\ProseMirrorToHtml\Nodes\Node;

class Div extends Node
{
    public function matching()
    {
        return $this->node->type === 'div';
    }

    public function tag()
    {
        return 'div';
    }
}
