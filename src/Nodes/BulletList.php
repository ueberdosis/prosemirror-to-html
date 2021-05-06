<?php

namespace ProseMirrorToHtml\Nodes;

class BulletList extends Node
{
    protected $nodeType = ['bullet_list', 'bulletList'];
    protected $tagName = 'ul';
}
