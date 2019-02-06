<?php

namespace Scrumpy\ProseMirrorToHtml\Nodes;

class CodeBlock extends Node
{
    public function matching()
    {
        return $this->node->type === 'code_block';
    }

    public function tag()
    {
        return [
            [
                'tag' => 'pre',
            ],
            [
                'tag' => 'code',
            ],
        ];
    }
}
