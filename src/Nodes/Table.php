<?php

namespace ProseMirrorToHtml\Nodes;

class Table extends Node
{
    protected $nodeType = 'table';
    protected $tagName = ['table', 'tbody'];
}
