<?php

namespace ProseMirrorToHtml\Renderers\Nodes;

class Paragraph extends AbstractNodeRenderer
{
    /**
     * @inheritDoc
     */
    public function getTag($node)
    {
        return 'p';
    }
}
