<?php

namespace ProseMirrorToHtml\Test\Nodes;

use ProseMirrorToHtml\Renderer;
use ProseMirrorToHtml\Test\TestCase;

class BlockquoteTest extends TestCase
{
    /** @test */
    public function blockquote_node_gets_rendered_correctly()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'blockquote',
                    'content' => [
                        [
                            'type' => 'text',
                            'text' => 'Example Quote',
                        ],
                    ],
                ],
            ],
        ];

        $html = '<blockquote>Example Quote</blockquote>';

        $this->assertEquals($html, (new Renderer)->render($json));
    }
}
