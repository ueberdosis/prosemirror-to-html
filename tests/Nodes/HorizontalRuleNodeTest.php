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
                    'type' => 'horizontalRule',
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
                [
                    'type' => 'horizontal_rule',
                ],
            ],
        ];

        $html = '<p>some text</p><hr><p>some more text</p><hr>';

        $this->assertEquals($html, (new Renderer)->render($json));
    }
}
