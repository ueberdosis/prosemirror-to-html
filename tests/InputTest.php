<?php

namespace ProseMirrorToHtml\Test;

use ProseMirrorToHtml\Renderer;

class InputTest extends TestCase
{
    /** @test */
    public function array_gets_rendered_to_html()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'text',
                    'text' => 'Example Text',
                ],
            ],
        ];

        $html = 'Example Text';

        $this->assertEquals($html, (new Renderer)->render($json));
    }


    /** @test */
    public function json_gets_rendered_to_html()
    {
        $json = json_encode([
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'text',
                    'text' => 'Example Text',
                ],
            ],
        ]);

        $html = 'Example Text';

        $this->assertEquals($html, (new Renderer)->render($json));
    }
}
