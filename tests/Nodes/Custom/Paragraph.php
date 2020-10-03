<?php

namespace ProseMirrorToHtml\Test\Nodes\Custom;

use ProseMirrorToHtml\Nodes\Node;
use ProseMirrorToHtml\Renderers\Nodes\AbstractNodeRenderer;

class Paragraph extends AbstractNodeRenderer
{
    /**
     * @inheritDoc
     */
    public function getTag($node)
    {
        return 'div';
    }
}
