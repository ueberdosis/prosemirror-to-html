<?php

namespace ProseMirrorToHtml\Renderers\Nodes;

class TableCell extends AbstractNodeRenderer
{
    const TAG = 'td';

    /**
     * @inheritDoc
     */
    public function getTag($node)
    {
        $attrs = [];
        if (isset($node->attrs)) {
            if (isset($node->attrs->colspan)) {
                $attrs['colspan'] = $node->attrs->colspan;
            }
            if (isset($node->attrs->colwidth)) {
                if ($widths = $node->attrs->colwidth) {
                    if (count($widths) === $attrs['colspan']) {
                        $attrs['data-colwidth'] = implode(',', $widths);
                    }
                }
            }
            if (isset($node->attrs->rowspan)) {
                $attrs['rowspan'] = $node->attrs->rowspan;
            }
        }

        return [
            [
                'tag' => static::TAG,
                'attrs' => $attrs,
            ],
        ];
    }
}
