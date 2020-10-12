<?php

namespace ProseMirrorToHtml\Test\Nodes;

use ProseMirrorToHtml\Renderer;
use ProseMirrorToHtml\Test\TestCase;

class CodeBlockTest extends TestCase
{
    /** @test */
    public function code_block_node_gets_rendered_correctly()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'code_block',
                    'content' => [
                        [
                            'type' => 'text',
                            'text' => 'Example Text',
                        ],
                    ],
                ],
            ],
        ];

        $html = '<pre><code>Example Text</code></pre>';

        $this->assertEquals($html, (new Renderer)->render($json));
    }
}
