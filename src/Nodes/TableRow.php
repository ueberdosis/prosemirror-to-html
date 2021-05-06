<?php

namespace ProseMirrorToHtml\Nodes;

class TableRow extends Node
{
    protected $nodeType = ['table_row', 'tableRow'];
    protected $tagName = 'tr';
}
