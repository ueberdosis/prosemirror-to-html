<?php

namespace ProseMirrorToHtml\Renderers\Nodes;

class ListItem extends AbstractNodeRenderer
{
    /**
     * @inheritDoc
     */
    public function getTag($node)
    {
        return 'li';
    }
}
