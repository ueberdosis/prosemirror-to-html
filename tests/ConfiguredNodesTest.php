<?php

namespace ProseMirrorToHtml\Test;

use ProseMirrorToHtml\Renderer;

class ConfiguredNodesTest extends TestCase
{
    /** @test */
    public function paragraph_is_enabled_by_default()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'paragraph',
                    'content' => [
                        [
                            'type' => 'text',
                            'text' => 'Example Text',
                        ],
                    ],
                ],
            ],
        ];

        $html = '<p>Example Text</p>';

        $this->assertEquals($html, (new Renderer)->render($json));
    }

    /** @test */
    public function paragraph_is_enabled_explicitly()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'paragraph',
                    'content' => [
                        [
                            'type' => 'text',
                            'text' => 'Example Text',
                        ],
                    ],
                ],
            ],
        ];

        $html = '<p>Example Text</p>';

        $this->assertEquals($html, (new Renderer)->withNodes([
            \ProseMirrorToHtml\Nodes\Paragraph::class,
        ])->render($json));
    }

    /** @test */
    public function all_marks_are_disabled()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'paragraph',
                    'content' => [
                        [
                            'type' => 'text',
                            'text' => 'Example Text',
                        ],
                    ],
                ],
            ],
        ];

        $html = 'Example Text';

        $this->assertEquals($html, (new Renderer)->withNodes([])->render($json));
    }

    /** @test */
    public function paragraph_is_replaced_with_a_custom_integration()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'paragraph',
                    'content' => [
                        [
                            'type' => 'text',
                            'text' => 'Example Text',
                        ],
                    ],
                ],
            ],
        ];

        $html = '<div>Example Text</div>';

        $this->assertEquals($html, (new Renderer)->replaceNode(
            \ProseMirrorToHtml\Nodes\Paragraph::class,
            \ProseMirrorToHtml\Test\Nodes\Custom\Paragraph::class
        )->render($json));
    }
}
