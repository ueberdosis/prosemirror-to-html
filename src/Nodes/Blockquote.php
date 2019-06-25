<?php

namespace Scrumpy\ProseMirrorToHtml\Nodes;

class Blockquote extends Node
{
    public function matching()
    {
        return $this->node->type === 'blockquote';
    }

    public function tag()
    {
        return 'blockquote';
    }
}
