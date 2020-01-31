<?php

namespace Scrumpy\ProseMirrorToHtml\Test\Marks;

use Scrumpy\ProseMirrorToHtml\Renderer;
use Scrumpy\ProseMirrorToHtml\Test\TestCase;

class SubscriptTest extends TestCase
{
    /** @test */
    public function subscript_gets_rendered_correctly()
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
