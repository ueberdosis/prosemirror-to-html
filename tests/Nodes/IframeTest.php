<?php

namespace Scrumpy\ProseMirrorToHtml\Test\Nodes;

use Scrumpy\ProseMirrorToHtml\Renderer;
use Scrumpy\ProseMirrorToHtml\Test\TestCase;

class IframeTest extends TestCase
{
    /** @test */
    public function self_closing_node_gets_rendered_correctly()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'iframe',
                    'attrs' => [
                        'src' => 'https://youtube.com/embed/test',
                    ],
                ],
            ],
        ];

        $html = '<iframe src="https://youtube.com/embed/test"></iframe>';

        $this->assertEquals($html, (new Renderer)->render($json));
    }
}
