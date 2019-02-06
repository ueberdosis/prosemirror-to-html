<?php

namespace Scrumpy\ProseMirrorToHtml\Test\Nodes;

use Scrumpy\ProseMirrorToHtml\Renderer;
use Scrumpy\ProseMirrorToHtml\Test\TestCase;

class CustomNodeTest extends TestCase
{
    /** @test */
    public function custom_node_gets_rendered_correctly()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'span',
                ],
            ],
        ];

        $html = '<span></span>';

        $renderer = new Renderer;
        $renderer->addNode(Custom\Span::class);

        $this->assertEquals($html, $renderer->render($json));
    }

    /** @test */
    public function custom_node_has_correct_text_gets_rendered_correctly()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'user',
                    'attrs' => [
                        'id' => 123,
                    ],
                ],
            ],
        ];

        $html = 'Foobar';

        $renderer = new Renderer;
        $renderer->addNode(Custom\User::class);

        $this->assertEquals($html, $renderer->render($json));
    }
}