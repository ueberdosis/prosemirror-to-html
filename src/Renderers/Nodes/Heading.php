<?php

namespace ProseMirrorToHtml\Renderers\Nodes;

class Heading extends AbstractNodeRenderer
{
    /**
     * @inheritDoc
     */
    public function getTag($node)
    {
        return "h{$node->attrs->level}";
    }
}
