<?php

namespace ProseMirrorToHtml\Nodes;

class ListItem extends Node
{
    protected $nodeType = ['list_item', 'listItem'];
    protected $tagName = 'li';
}
