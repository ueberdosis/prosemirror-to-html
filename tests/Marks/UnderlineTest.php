<?php

namespace ProseMirrorToHtml\Test\Marks;

use ProseMirrorToHtml\Renderer;
use ProseMirrorToHtml\Test\TestCase;

class UnderlineTest extends TestCase
{
    /** @test */
    public function underline_mark_gets_rendered_correctly()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'text',
                    'text' => 'Example Text',
                    'marks' => [
                        [
                            'type' => 'underline',
                        ],
                    ],
                ],
            ],
        ];

        $html = '<u>Example Text</u>';

        $this->assertEquals($html, (new Renderer)->render($json));
    }
}
