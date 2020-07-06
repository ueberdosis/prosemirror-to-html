<?php

namespace Scrumpy\ProseMirrorToHtml\Test;

use Scrumpy\ProseMirrorToHtml\Renderer;

class ConfiguredNodesTest extends TestCase
{
    /** @test */
    public function bold_is_enabled_by_default()
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
    public function bold_is_enabled_explicitly()
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
            \Scrumpy\ProseMirrorToHtml\Nodes\Paragraph::class,
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
}
