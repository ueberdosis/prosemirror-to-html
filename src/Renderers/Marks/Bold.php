<?php

namespace ProseMirrorToHtml\Renderers\Marks;

class Bold extends AbstractMarkRenderer
{
    /**
     * @inheritDoc
     */
    public function getTag($mark)
    {
        return 'strong';
    }
}
