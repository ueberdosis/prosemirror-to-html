<?php

namespace ProseMirrorToHtml\Test\Marks;

use ProseMirrorToHtml\Renderer;
use ProseMirrorToHtml\Test\TestCase;

class SuperscriptTest extends TestCase
{
    /** @test */
    public function superscript_mark_gets_rendered_correctly()
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

        $this->assertEquals($html, (new Renderer)->render($json));
    }
}
