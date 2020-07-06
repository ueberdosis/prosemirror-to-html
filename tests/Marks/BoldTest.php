<?php

namespace Scrumpy\ProseMirrorToHtml\Test\Marks;

use Scrumpy\ProseMirrorToHtml\Renderer;
use Scrumpy\ProseMirrorToHtml\Test\TestCase;

class BoldTest extends TestCase
{
    /** @test */
    public function underline_gets_rendered_correctly()
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
