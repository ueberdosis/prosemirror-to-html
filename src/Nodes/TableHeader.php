<?php

namespace ProseMirrorToHtml\Nodes;

class TableHeader extends TableCell
{
    protected $nodeType = ['table_header', 'tableHeader'];
    protected $tagName  = 'th';
}
