<?php

namespace ProseMirrorToHtml\Renderers\Nodes;

class Image extends AbstractNodeRenderer
{
    /**
     * @inheritDoc
     */
    public function getTag($node)
    {
        return [
            [
                'tag' => 'img',
                'attrs' => $node->attrs,
            ],
        ];
    }

    public function isSelfClosing()
    {
        return true;
    }
}
