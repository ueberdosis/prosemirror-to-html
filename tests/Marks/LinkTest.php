<?php

namespace Scrumpy\ProseMirrorToHtml\Test\Marks;

use Scrumpy\ProseMirrorToHtml\Renderer;
use Scrumpy\ProseMirrorToHtml\Test\TestCase;

class LinkTest extends TestCase
{
    /** @test */
    public function link_mark_gets_rendered_correctly()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'text',
                    'text' => 'Example Link',
                    'marks' => [
                        [
                            'type' => 'link',
                            'attrs' => [
                                'href' => 'https://scrumpy.io',
                                'target' => '_blank',
                                'rel' => 'noopener'
                            ],
                        ],
                    ],
                ],
            ],
        ];

        $html = '<a href="https://scrumpy.io" target="_blank" rel="noopener">Example Link</a>';

        $this->assertEquals($html, (new Renderer)->render($json));
    }
}
