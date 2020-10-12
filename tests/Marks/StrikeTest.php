<?php

namespace ProseMirrorToHtml\Test\Marks;

use ProseMirrorToHtml\Renderer;
use ProseMirrorToHtml\Test\TestCase;

class StrikeTest extends TestCase
{
    /** @test */
    public function strike_gets_rendered_correctly()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'text',
                    'text' => 'Example Text',
                    'marks' => [
                        [
                            'type' => 'strike',
                        ],
                    ],
                ],
            ],
        ];

        $html = '<strike>Example Text</strike>';

        $this->assertEquals($html, (new Renderer)->render($json));
    }
}
