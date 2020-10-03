<?php

namespace ProseMirrorToHtml\Renderers\Marks;

class Strike extends AbstractMarkRenderer
{
    /**
     * @inheritDoc
     */
    public function getTag($mark)
    {
        return 'strike';
    }
}
