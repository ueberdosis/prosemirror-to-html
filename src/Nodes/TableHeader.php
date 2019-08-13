<?php

namespace Scrumpy\ProseMirrorToHtml\Nodes;

class TableHeader extends Node
{
    public function matching()
    {
        return $this->node->type === 'table_header';
    }

    public function tag()
    {
        return [
            [
                'tag'   => 'th',
                'attrs' => $this->node->attrs ?? [],
            ],
        ];
    }
}
