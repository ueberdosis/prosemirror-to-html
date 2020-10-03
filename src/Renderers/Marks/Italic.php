<?php

namespace ProseMirrorToHtml\Renderers\Marks;

class Italic extends AbstractMarkRenderer
{
    /**
     * @inheritDoc
     */
    public function getTag($mark)
    {
        return 'em';
    }
}
