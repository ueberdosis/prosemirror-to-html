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

    /** @test */
    public function encoding_is_correct()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'text',
                    'text' => 'Äffchen',
                ],
            ],
        ];

        $html = 'Äffchen';

        $this->assertEquals($html, (new Renderer)->render($json));
    }

    /** @test */
    public function quotes_are_escape()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'text',
                    'text' => '"Example Text"',
                ],
            ],
        ];

        $html = '&quot;Example Text&quot;';

        $this->assertEquals($html, (new Renderer)->render($json));
    }
}
