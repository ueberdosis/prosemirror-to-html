<?php

namespace ProseMirrorToHtml\Test\Nodes\Custom;

use ProseMirrorToHtml\Nodes\Node;

class Paragraph extends Node
{
    protected $nodeType = 'paragraph';
    protected $tagName = 'div';
}
