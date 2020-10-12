<?php

namespace ProseMirrorToHtml\Test\Marks;

use ProseMirrorToHtml\Renderer;
use ProseMirrorToHtml\Test\TestCase;

class SubscriptTest extends TestCase
{
    /** @test */
    public function subscript_mark_gets_rendered_correctly()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'text',
                    'text' => 'Example Text',
                    'marks' => [
                        [
                            'type' => 'subscript',
                        ],
                    ],
                ],
            ],
        ];

        $html = '<sub>Example Text</sub>';

        $this->assertEquals($html, (new Renderer)->render($json));
    }
}
