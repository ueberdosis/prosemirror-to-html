<?php

namespace Scrumpy\ProseMirrorToHtml\Test\Nodes\Custom;

use Scrumpy\ProseMirrorToHtml\Nodes\Node;

class Span extends Node
{
    public function matching()
    {
        return $this->node->type === 'span';
    }

    public function tag()
    {
        return 'span';
    }
}
