<?php

namespace ProseMirrorToHtml\Test\Nodes;

use ProseMirrorToHtml\Renderer;
use ProseMirrorToHtml\Test\TestCase;

class ParagraphTest extends TestCase
{
    /** @test */
    public function paragraph_node_gets_rendered_correctly()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'paragraph',
                    'content' => [
                        [
                            'type' => 'text',
                            'text' => 'Example Paragraph',
                        ],
                    ],
                ],
            ],
        ];

        $html = '<p>Example Paragraph</p>';

        $this->assertEquals($html, (new Renderer)->render($json));
    }
}
