<?php

namespace ProseMirrorToHtml\Nodes;

class Heading extends Node
{
    protected $nodeType = 'heading';

    public function tag()
    {
        return "h{$this->node->attrs->level}";
    }
}
