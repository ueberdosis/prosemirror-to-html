<?php

namespace ProseMirrorToHtml\Renderers\Nodes;

class OrderedList extends AbstractNodeRenderer
{
    /**
     * @inheritDoc
     */
    public function getTag($node)
    {
        return 'ol';
    }
}
