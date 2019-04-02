<?php

namespace Scrumpy\ProseMirrorToHtml\Test\Marks;

use Scrumpy\ProseMirrorToHtml\Renderer;
use Scrumpy\ProseMirrorToHtml\Test\TestCase;

class CodeTest extends TestCase
{
    /** @test */
    public function code_mark_gets_rendered_correctly()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'text',
                    'text' => 'Example Text',
                    'marks' => [
                        [
                            'type' => 'code',
                        ],
                    ],
                ],
            ],
        ];

        $html = '<code>Example Text</code>';

        $this->assertEquals($html, (new Renderer)->render($json));
    }
}