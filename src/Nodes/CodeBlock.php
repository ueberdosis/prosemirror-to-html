<?php

namespace ProseMirrorToHtml\Nodes;

class CodeBlock extends Node
{
    protected $nodeType = 'code_block';
    protected $tagName = ['pre', 'code'];
}
