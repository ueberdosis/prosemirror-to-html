<?php

namespace Scrumpy\ProseMirrorToHtml\Test\Nodes;

use Scrumpy\ProseMirrorToHtml\Renderer;
use Scrumpy\ProseMirrorToHtml\Test\TestCase;

class CustomMarkTest extends TestCase
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
                            ],
                        ],
                    ],
                ],
            ],
        ];

        $html = '<a href="https://scrumpy.io">Example Link</a>';

        $this->assertEquals($html, (new Renderer)->render($json));
    }
}