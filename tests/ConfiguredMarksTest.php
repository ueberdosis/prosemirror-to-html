<?php

namespace Scrumpy\ProseMirrorToHtml\Test;

use Scrumpy\ProseMirrorToHtml\Renderer;

class ConfiguredMarksTest extends TestCase
{
    /** @test */
    public function bold_is_enabled_by_default()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'text',
                    'text' => 'Example Text',
                    'marks' => [
                        [
                            'type' => 'bold',
                        ],
                    ],
                ],
            ],
        ];

        $html = '<strong>Example Text</strong>';

        $this->assertEquals($html, (new Renderer)->render($json));
    }

    /** @test */
    public function bold_is_enabled_explicitly()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'text',
                    'text' => 'Example Text',
                    'marks' => [
                        [
                            'type' => 'bold',
                        ],
                    ],
                ],
            ],
        ];

        $html = '<strong>Example Text</strong>';

        $this->assertEquals($html, (new Renderer)->withMarks([
            \Scrumpy\ProseMirrorToHtml\Marks\Bold::class,
        ])->render($json));
    }

    /** @test */
    public function all_marks_are_disabled()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'text',
                    'text' => 'Example Text',
                    'marks' => [
                        [
                            'type' => 'bold',
                        ],
                    ],
                ],
            ],
        ];

        $html = 'Example Text';

        $this->assertEquals($html, (new Renderer)->withMarks([])->render($json));
    }

    /** @test */
    public function bold_is_replaced_with_a_custom_integration()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'text',
                    'text' => 'Example Text',
                    'marks' => [
                        [
                            'type' => 'bold',
                        ],
                    ],
                ],
            ],
        ];

        $html = '<b>Example Text</b>';

        $this->assertEquals($html, (new Renderer)->replaceMark(
            \Scrumpy\ProseMirrorToHtml\Marks\Bold::class,
            \Scrumpy\ProseMirrorToHtml\Test\Marks\Custom\Bold::class
        )->render($json));
    }
}
