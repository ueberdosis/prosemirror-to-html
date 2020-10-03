<?php

namespace ProseMirrorToHtml\Renderers\Nodes;

class Text extends AbstractNodeRenderer
{
    /**
     * @inheritDoc
     */
    public function getTag($node)
    {
        return null;
    }
}
