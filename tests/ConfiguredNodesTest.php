<?php

namespace ProseMirrorToHtml\Test;

use ProseMirrorToHtml\Registry\Factory;
use ProseMirrorToHtml\Registry\RendererRegistry;
use ProseMirrorToHtml\Renderer;
use ProseMirrorToHtml\Renderers\Nodes\Paragraph;
use ProseMirrorToHtml\Test\Nodes\Custom as Custom;

class ConfiguredNodesTest extends TestCase
{
    /** @test */
    public function paragraph_is_enabled_by_default()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'paragraph',
                    'content' => [
                        [
                            'type' => 'text',
                            'text' => 'Example Text',
                        ],
                    ],
                ],
            ],
        ];

        $html = '<p>Example Text</p>';

        $this->assertEquals($html, (new Renderer)->render($json));
    }

    /** @test */
    public function paragraph_is_enabled_explicitly()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'paragraph',
                    'content' => [
                        [
                            'type' => 'text',
                            'text' => 'Example Text',
                        ],
                    ],
                ],
            ],
        ];

        $html = '<p>Example Text</p>';

        $nodesRegistry = new RendererRegistry();
        $nodesRegistry->add(new Paragraph());
        $renderer = new Renderer($nodesRegistry);

        $this->assertEquals($html, $renderer->render($json));
    }

    /** @test */
    public function all_marks_are_disabled()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'paragraph',
                    'content' => [
                        [
                            'type' => 'text',
                            'text' => 'Example Text',
                        ],
                    ],
                ],
            ],
        ];

        $html = 'Example Text';

        $nodesRegistry = new RendererRegistry();
        $renderer = new Renderer($nodesRegistry);

        $this->assertEquals($html, $renderer->render($json));
    }

    /** @test */
    public function paragraph_is_replaced_with_a_custom_integration()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'paragraph',
                    'content' => [
                        [
                            'type' => 'text',
                            'text' => 'Example Text',
                        ],
                    ],
                ],
            ],
        ];

        $html = '<div>Example Text</div>';

        $nodesRegistry = Factory::buildNodesRegistry();
        $nodesRegistry->add(new Custom\Paragraph());

        $renderer = new Renderer($nodesRegistry);

        $this->assertEquals($html, $renderer->render($json));
    }
}
