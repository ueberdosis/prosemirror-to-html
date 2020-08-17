<?php

namespace ProseMirrorToHtml\Test\Nodes;

use ProseMirrorToHtml\Renderer;
use ProseMirrorToHtml\Test\TestCase;

class XSSTest extends TestCase
{
    /** @test */
    public function text_should_not_get_rendered_as_html()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'text',
                    'text' => '<script>alert(1)</script>',
                ],
            ],
        ];

        $renderer = new Renderer();
        $html = $renderer->render($json);

        // assert that the input has been sanitized
        $this->assertEquals('&lt;script&gt;alert(1)&lt;/script&gt;', $html);
    }
}
