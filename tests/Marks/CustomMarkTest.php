<?php

namespace Scrumpy\ProseMirrorToHtml\Test\Marks;

use Scrumpy\ProseMirrorToHtml\Renderer;
use Scrumpy\ProseMirrorToHtml\Test\TestCase;
use Scrumpy\ProseMirrorToHtml\Test\Marks\Custom\CustomMark;

class CustomMarkTest extends TestCase
{
    /** @test */
    public function custom_mark_gets_rendered_correctly()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'text',
                    'text' => 'Example Text',
                    'marks' => [
                        [
                            'type' => 'custom_mark',
                        ],
                    ],
                ],
            ],
        ];

        $html = '<custom_mark>Example Text</custom_mark>';

        $renderer = new Renderer();
        $renderer->addMark(CustomMark::class);

        $this->assertEquals($html, $renderer->render($json));
    }

    /** @test */
    public function multiple_custom_marks_gets_rendered_correctly()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'text',
                    'text' => 'Example Text',
                    'marks' => [
                        [
                            'type' => 'custom_mark',
                        ],
                    ],
                ],
            ],
        ];

        $html = '<custom_mark>Example Text</custom_mark>';

        $renderer = new Renderer();
        $renderer->addMarks([CustomMark::class]);

        $this->assertEquals($html, $renderer->render($json));
    }
}
