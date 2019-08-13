<?php

namespace Scrumpy\ProseMirrorToHtml\Nodes;

class TableCell extends Node
{
    public function matching()
    {
        return $this->node->type === 'table_cell';
    }

    public function tag()
    {
        return [
            [
                'tag'   => 'td',
                'attrs' => $this->node->attrs ?? [],
            ],
        ];
    }
}
