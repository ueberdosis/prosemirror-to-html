<?php

namespace ProseMirrorToHtml\Renderers\Marks;

class Subscript extends AbstractMarkRenderer
{
    /**
     * @inheritDoc
     */
    public function getTag($mark)
    {
        return 'sub';
    }
}
