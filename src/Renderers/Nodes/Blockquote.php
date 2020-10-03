<?php

namespace ProseMirrorToHtml\Renderers\Nodes;

class Blockquote extends AbstractNodeRenderer
{
    /**
     * @inheritDoc
     */
    public function getTag($node)
    {
        return 'blockquote';
    }
}
