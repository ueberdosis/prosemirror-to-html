<?php

namespace ProseMirrorToHtml\Test\Nodes\Custom;

use ProseMirrorToHtml\Renderers\Nodes\AbstractNodeRenderer;

class Div extends AbstractNodeRenderer
{
    /**
     * @inheritDoc
     */
    public function getTag($node)
    {
        return 'div';
    }
}
