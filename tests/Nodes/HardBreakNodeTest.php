<?php

namespace Scrumpy\ProseMirrorToHtml\Test\Nodes;

use Scrumpy\ProseMirrorToHtml\Renderer;
use Scrumpy\ProseMirrorToHtml\Test\TestCase;
use Scrumpy\ProseMirrorToHtml\Test\Nodes\Custom\HardBreak;

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
                            'type' => 'hard_break',
                        ],
                        [
                            'type' => 'text',
                            'text' => 'some more text',
                        ],
                    ],
                ],
            ],
        ];

        $html = '<p>some text<br>some more text</p>';

        $renderer = new Renderer;
        $renderer->addNode(HardBreak::class);

        $this->assertEquals($html, $renderer->render($json));
    }
}
