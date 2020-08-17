<?php

namespace ProseMirrorToHtml\Nodes;

class TableHeader extends TableCell
{
    protected $nodeType = 'table_header';
    protected $tagName  = 'th';
}
