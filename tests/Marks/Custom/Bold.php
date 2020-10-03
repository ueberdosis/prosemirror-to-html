<?php

namespace ProseMirrorToHtml\Test\Marks\Custom;

use ProseMirrorToHtml\Renderers\Marks\AbstractMarkRenderer;

class Bold extends AbstractMarkRenderer
{
    /**
     * @inheritDoc
     */
    public function getTag($node)
    {
        return 'b';
    }
}
