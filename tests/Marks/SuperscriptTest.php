<?php

namespace Scrumpy\ProseMirrorToHtml\Test\Marks;

use Scrumpy\ProseMirrorToHtml\Renderer;
use Scrumpy\ProseMirrorToHtml\Test\TestCase;

class SuperscriptTest extends TestCase
{
    /** @test */
    public function superscript_gets_rendered_correctly()
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
