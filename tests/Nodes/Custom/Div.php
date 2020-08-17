<?php

namespace ProseMirrorToHtml\Test\Nodes\Custom;

use ProseMirrorToHtml\Nodes\Node;

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
