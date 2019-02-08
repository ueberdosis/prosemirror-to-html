<?php

namespace Scrumpy\ProseMirrorToHtml\Nodes;

class Paragraph extends Node
{
    public function matching()
    {
        return $this->node->type === 'paragraph';
    }

    public function tag()
    {
        return 'p';
    }
}
