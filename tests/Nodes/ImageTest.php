<?php

namespace ProseMirrorToHtml\Test\Nodes;

use ProseMirrorToHtml\Renderer;
use ProseMirrorToHtml\Test\TestCase;

class ImageTest extends TestCase
{
    /** @test */
    public function image_node_gets_rendered_correctly()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'image',
                    'attrs' => [
                        'alt' => 'an image',
                        'src' => 'image/source',
                        'title' => 'The image title',
                    ],
                ],
            ],
        ];

        $html = '<img alt="an image" src="image/source" title="The image title">';

        $this->assertEquals($html, (new Renderer)->render($json));
    }
}
