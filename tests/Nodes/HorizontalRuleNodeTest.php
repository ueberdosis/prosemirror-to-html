<?php

namespace ProseMirrorToHtml\Test\Nodes;

use ProseMirrorToHtml\Renderer;
use ProseMirrorToHtml\Test\TestCase;

class HorizontalRuleNodeTest extends TestCase
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
                    ],
                ],
                [
                    'type' => 'horizontal_rule',
                ],
                [
                    'type' => 'paragraph',
                    'content' => [
                        [
                            'type' => 'text',
                            'text' => 'some more text',
                        ],
                    ],
                ],
            ],
        ];

        $html = '<p>some text</p><hr><p>some more text</p>';

        $this->assertEquals($html, (new Renderer)->render($json));
    }
}
