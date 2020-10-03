<?php

namespace ProseMirrorToHtml\Renderers\Nodes;

class BulletList extends AbstractNodeRenderer
{
    /**
     * @inheritDoc
     */
    public function getTag($node)
    {
        return 'ul';
    }
}
