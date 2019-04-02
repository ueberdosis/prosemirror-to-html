<?php

namespace Scrumpy\ProseMirrorToHtml\Test\Marks;

use Scrumpy\ProseMirrorToHtml\Renderer;
use Scrumpy\ProseMirrorToHtml\Test\Marks\Custom\Superscript;
use Scrumpy\ProseMirrorToHtml\Test\TestCase;

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
                            'type' => 'superscript',
                        ],
                    ],
                ],
            ],
        ];

        $html = '<sup>Example Text</sup>';

        $renderer = new Renderer();
        $renderer->addMark(Superscript::class);

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
                            'type' => 'superscript',
                        ],
                    ],
                ],
            ],
        ];

        $html = '<sup>Example Text</sup>';

        $renderer = new Renderer();
        $renderer->addMarks([Superscript::class]);

        $this->assertEquals($html, $renderer->render($json));
    }
}