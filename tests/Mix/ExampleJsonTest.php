<?php

namespace Scrumpy\ProseMirrorToHtml\Test\Mix;

use Scrumpy\ProseMirrorToHtml\Renderer;
use Scrumpy\ProseMirrorToHtml\Test\TestCase;

class ExampleJsonTest extends TestCase
{
    /** @test */
    public function example_gets_rendered_correctly()
    {
        $json = '{
          "type": "doc",
          "content": [
            {
              "type": "heading",
              "attrs": {
                "level": 2
              },
              "content": [
                {
                  "type": "text",
                  "text": "Export HTML or JSON"
                }
              ]
            },
            {
              "type": "paragraph",
              "content": [
                {
                  "type": "text",
                  "text": "You are able to export your data as "
                },
                {
                  "type": "text",
                  "marks": [
                    {
                      "type": "code"
                    }
                  ],
                  "text": "HTML"
                },
                {
                  "type": "text",
                  "text": " or "
                },
                {
                  "type": "text",
                  "marks": [
                    {
                      "type": "code"
                    }
                  ],
                  "text": "JSON"
                },
                {
                  "type": "text",
                  "text": ". To pass "
                },
                {
                  "type": "text",
                  "marks": [
                    {
                      "type": "code"
                    }
                  ],
                  "text": "HTML"
                },
                {
                  "type": "text",
                  "text": " to the editor use the "
                },
                {
                  "type": "text",
                  "marks": [
                    {
                      "type": "code"
                    }
                  ],
                  "text": "content"
                },
                {
                  "type": "text",
                  "text": " slot. To pass "
                },
                {
                  "type": "text",
                  "marks": [
                    {
                      "type": "code"
                    }
                  ],
                  "text": "JSON"
                },
                {
                  "type": "text",
                  "text": " to the editor use the "
                },
                {
                  "type": "text",
                  "marks": [
                    {
                      "type": "code"
                    }
                  ],
                  "text": "doc"
                },
                {
                  "type": "text",
                  "text": " prop."
                }
              ]
            },
            {
              "type": "bullet_list",
              "content": [
                {
                  "type": "list_item",
                  "content": [
                    {
                      "type": "text",
                      "text": "List item 1"
                    }
                  ]
                },
                {
                  "type": "list_item",
                  "content": [
                    {
                      "type": "text",
                      "text": "List item 2"
                    }
                  ]
                }
              ]
            },
            {
              "type": "ordered_list",
              "attrs": {
                "order": 1
              },
              "content": [
                {
                  "type": "list_item",
                  "content": [
                    {
                      "type": "text",
                      "text": "List item 1"
                    }
                  ]
                },
                {
                  "type": "list_item",
                  "content": [
                    {
                      "type": "text",
                      "text": "List item 2"
                    }
                  ]
                }
              ]
            }
          ]
        }';

        $html = '<h2>Export HTML or JSON</h2><p>You are able to export your data as <code>HTML</code> or <code>JSON</code>. To pass <code>HTML</code> to the editor use the <code>content</code> slot. To pass <code>JSON</code> to the editor use the <code>doc</code> prop.</p><ul><li>List item 1</li><li>List item 2</li></ul><ol><li>List item 1</li><li>List item 2</li></ol>';

        $this->assertEquals($html, (new Renderer)->render($json));
    }
}