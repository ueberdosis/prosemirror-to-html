<?php

namespace ProseMirrorToHtml\Renderers\Marks;

class Link extends AbstractMarkRenderer
{
    /**
     * @inheritDoc
     */
    public function getTag($mark)
    {
        $attrs = [];

        if (isset($mark->attrs->target)) {
            $attrs['target'] = $mark->attrs->target;
        }

        if (isset($mark->attrs->rel)) {
            $attrs['rel'] = $mark->attrs->rel;
        }

        $attrs['href'] = $mark->attrs->href;

        return [
            [
                'tag' => 'a',
                'attrs' => $attrs,
            ],
        ];
    }
}
