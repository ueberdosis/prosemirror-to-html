<?php

namespace ProseMirrorToHtml\Renderers\Nodes;

class TableRow extends AbstractNodeRenderer
{
    /**
     * @inheritDoc
     */
    public function getTag($node)
    {
        return 'tr';
    }
}
