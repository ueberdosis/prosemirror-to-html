<?php

namespace ProseMirrorToHtml\Test\Marks;

use ProseMirrorToHtml\Renderer;
use ProseMirrorToHtml\Test\TestCase;

class BoldTest extends TestCase
{
    /** @test */
    public function bold_mark_gets_rendered_correctly()
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
}
