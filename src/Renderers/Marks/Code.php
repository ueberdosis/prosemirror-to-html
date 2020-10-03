<?php

namespace ProseMirrorToHtml\Renderers\Marks;

class Code extends AbstractMarkRenderer
{
    /**
     * @inheritDoc
     */
    public function getTag($mark)
    {
        return 'code';
    }
}
