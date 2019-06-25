<?php

namespace Scrumpy\ProseMirrorToHtml\Marks;

class Link extends Mark
{
    public function matching()
    {
        return $this->mark->type === 'link';
    }

    public function tag()
    {
        return [
            [
                'tag' => 'a',
                'attrs' => [
                    'href' => $this->mark->attrs->href,
                ],
            ],
        ];
    }
}
