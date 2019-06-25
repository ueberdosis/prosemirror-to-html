<?php

namespace Scrumpy\ProseMirrorToHtml\Test\Nodes\Custom;

use Scrumpy\ProseMirrorToHtml\Nodes\Node;

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
