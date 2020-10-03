<?php

namespace ProseMirrorToHtml\Renderers\Marks;

class Underline extends AbstractMarkRenderer
{
    /**
     * @inheritDoc
     */
    public function getTag($mark)
    {
        return 'u';
    }
}
