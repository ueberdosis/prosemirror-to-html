<?php

namespace ProseMirrorToHtml\Test;

use ProseMirrorToHtml\Registry\Factory;
use ProseMirrorToHtml\Registry\RendererRegistry;
use ProseMirrorToHtml\Renderer;
use ProseMirrorToHtml\Renderers\Marks\Bold;
use ProseMirrorToHtml\Test\Marks\Custom as Custom;

class ConfiguredMarksTest extends TestCase
{
    /** @test */
    public function bold_is_enabled_by_default()
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

    /** @test */
    public function bold_is_enabled_explicitly()
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

        $marksRegistry = new RendererRegistry();
        $marksRegistry->add(new Bold());

        $renderer = new Renderer(null, $marksRegistry);


        $this->assertEquals($html, $renderer->render($json));
    }

    /** @test */
    public function all_marks_are_disabled()
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

        $html = 'Example Text';

        $marksRegistry =  new RendererRegistry();

        $renderer = new Renderer(null, $marksRegistry);

        $this->assertEquals($html, $renderer->render($json));
    }

    /** @test */
    public function bold_is_replaced_with_a_custom_integration()
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

        $html = '<b>Example Text</b>';

        $marksRegistry = Factory::buildMarksRegistry();
        $marksRegistry->add(new Custom\Bold());

        $renderer = new Renderer(null, $marksRegistry);

        $this->assertEquals($html, $renderer->render($json));
    }
}
