<?php

namespace ProseMirrorToHtml\Renderers\Nodes;

class CodeBlock extends AbstractNodeRenderer
{
    /**
     * @inheritDoc
     */
    public function getTag($node)
    {
        return ['pre', 'code'];
    }
}
