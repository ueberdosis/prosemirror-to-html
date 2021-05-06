<?php

namespace ProseMirrorToHtml\Test\Nodes;

use ProseMirrorToHtml\Renderer;
use ProseMirrorToHtml\Test\TestCase;

class HardBreakNodeTest extends TestCase
{
    /** @test */
    public function self_closing_node_gets_rendered_correctly()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'paragraph',
                    'content' => [
                        [
                            'type' => 'text',
                            'text' => 'some text',
                        ],
                        [
                            'type' => 'hardBreak',
                        ],
                        [
                            'type' => 'text',
                            'text' => 'some more text',
                        ],
                        [
                            'type' => 'hard_break',
                        ],
                        [
                            'type' => 'text',
                            'text' => 'other text',
                        ],
                    ],
                ],
            ],
        ];

        $html = '<p>some text<br>some more text<br>other text</p>';

        $this->assertEquals($html, (new Renderer)->render($json));
    }
}
