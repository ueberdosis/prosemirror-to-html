<?php

namespace ProseMirrorToHtml\Renderers\Marks;

class Superscript extends AbstractMarkRenderer
{
    /**
     * @inheritDoc
     */
    public function getTag($mark)
    {
        return 'sup';
    }
}
