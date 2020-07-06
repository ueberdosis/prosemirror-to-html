<?php

namespace Scrumpy\ProseMirrorToHtml\Test\Marks;

use Scrumpy\ProseMirrorToHtml\Renderer;
use Scrumpy\ProseMirrorToHtml\Test\TestCase;

class ItalicTest extends TestCase
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
                            'type' => 'italic',
                        ],
                    ],
                ],
            ],
        ];

        $html = '<em>Example Text</em>';

        $this->assertEquals($html, (new Renderer)->render($json));
    }
}
