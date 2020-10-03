<?php

namespace ProseMirrorToHtml\Test\Nodes;

use ProseMirrorToHtml\Registry\Factory;
use ProseMirrorToHtml\Renderer;
use ProseMirrorToHtml\Test\TestCase;

class CustomNodeTest extends TestCase
{
    /** @test */
    public function custom_node_gets_rendered_correctly()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'div',
                ],
            ],
        ];

        $html = '<div></div>';

        $nodesRegistry = Factory::buildNodesRegistry();
        $nodesRegistry->add(new Custom\Div());

        $renderer = new Renderer($nodesRegistry);

        $this->assertEquals($html, $renderer->render($json));
    }

    /** @test */
    public function multiple_custom_nodes_get_rendered_correctly()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'div',
                ],
            ],
        ];

        $html = '<div></div>';

        $nodesRegistry = Factory::buildNodesRegistry();
        $nodesRegistry->add(new Custom\Div());

        $renderer = new Renderer($nodesRegistry);

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

        $nodesRegistry = Factory::buildNodesRegistry();
        $nodesRegistry->add(new Custom\User());

        $renderer = new Renderer($nodesRegistry);

        $this->assertEquals($html, $renderer->render($json));
    }
}
