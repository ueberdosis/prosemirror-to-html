<?php

namespace Scrumpy\ProseMirrorToHtml\Nodes;

class HardBreak extends Node
{
    public function matching()
    {
        return $this->node->type === 'hard_break';
    }

    public function selfClosing()
    {
        return true;
    }

    public function tag()
    {
        return 'br';
    }
}
