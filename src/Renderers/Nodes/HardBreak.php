<?php

namespace ProseMirrorToHtml\Renderers\Nodes;

class HardBreak extends AbstractNodeRenderer
{
    public function isSelfClosing()
    {
        return true;
    }

    /**
     * @inheritDoc
     */
    public function getTag($node)
    {
        return 'br';
    }
}
