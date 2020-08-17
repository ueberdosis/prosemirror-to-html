<?php

namespace Scrumpy\ProseMirrorToHtml\Test\Nodes\Custom;

use Scrumpy\ProseMirrorToHtml\Nodes\Node;

class Paragraph extends Node
{
    protected $nodeType = 'paragraph';
    protected $tagName = 'div';
}
