<?php

namespace Scrumpy\ProseMirrorToHtml\Test\Nodes;

use Scrumpy\ProseMirrorToHtml\Renderer;
use Scrumpy\ProseMirrorToHtml\Test\TestCase;

class OrderedListTest extends TestCase
{
    /** @test */
    public function bullet_list_gets_rendered_correctly()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'ordered_list',
                    'attrs' => [
                        'order' => 1
                    ],
                    'content' => [
                        [
                            'type' => 'list_item',
                            'content' => [
                                [
                                    'type' => 'text',
                                    'text' => 'List item 1'
                                ]
                            ],
                        ],
                        [
                            'type' => 'list_item',
                            'content' => [
                                [
                                    'type' => 'text',
                                    'text' => 'List item 2'
                                ]
                            ],
                        ],
                    ],
                ],
            ],
        ];

        $html = '<ol><li>List item 1</li><li>List item 2</li></ol>';

        $this->assertEquals($html, (new Renderer)->render($json));
    }
}