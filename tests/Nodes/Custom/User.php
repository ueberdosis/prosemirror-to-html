<?php

namespace Scrumpy\ProseMirrorToHtml\Test\Nodes\Custom;

use Scrumpy\ProseMirrorToHtml\Nodes\Node;

class User extends Node
{
    public function matching()
    {
        return $this->node->type === 'user';
    }

    public function text()
    {
        return 'Foobar';
    }
}
