<?php

namespace ProseMirrorToHtml\Nodes;

class CodeBlock extends Node
{
    protected $nodeType = ['code_block', 'codeBlock'];
    protected $tagName = ['pre', 'code'];
}
