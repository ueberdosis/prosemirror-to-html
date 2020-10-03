<?php

namespace ProseMirrorToHtml\Test\Nodes\Custom;

use ProseMirrorToHtml\Nodes\Node;
use ProseMirrorToHtml\Renderers\Nodes\AbstractNodeRenderer;

class User extends AbstractNodeRenderer
{
    /**
     * @inheritDoc
     */
    public function getText($node)
    {
        return 'Foobar';
    }

    /**
     * @inheritDoc
     */
    public function getTag($node)
    {
       return null;
    }
}
