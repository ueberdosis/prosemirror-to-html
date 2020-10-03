<?php

namespace ProseMirrorToHtml\Renderers\Nodes;

class Table extends AbstractNodeRenderer
{
    /**
     * @inheritDoc
     */
    public function getTag($node)
    {
        return ['table', 'tbody'];
    }
}
