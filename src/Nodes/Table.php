<?php

namespace Scrumpy\ProseMirrorToHtml\Nodes;

class Table extends Node
{
    public function matching()
    {
        return $this->node->type === 'table';
    }

    public function tag()
    {
        return [
            'table',
            'tbody',
        ];
    }
}
