<?php

namespace ProseMirrorToHtml\Nodes;

class HorizontalRule extends Node
{
    protected $nodeType = ['horizontal_rule', 'horizontalRule'];
    protected $tagName = 'hr';

    public function selfClosing()
    {
        return true;
    }
}
