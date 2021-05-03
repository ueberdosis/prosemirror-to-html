> We need your support to maintain this package. 💖 https://github.com/sponsors/ueberdosis

# ProseMirror to HTML
Takes ProseMirror JSON and outputs HTML.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ueberdosis/prosemirror-to-html.svg)](https://packagist.org/packages/ueberdosis/prosemirror-to-html)
[![Integrate](https://github.com/ueberdosis/html-to-prosemirror/workflows/Integrate/badge.svg?branch=main)](https://github.com/ueberdosis/html-to-prosemirror/actions)
[![Total Downloads](https://img.shields.io/packagist/dt/ueberdosis/prosemirror-to-html.svg?style=flat-square)](https://packagist.org/packages/ueberdosis/prosemirror-to-html)
[![Sponsor](https://img.shields.io/static/v1?label=Sponsor&message=%E2%9D%A4&logo=GitHub)](https://github.com/sponsors/ueberdosis)

## Installation
```bash
composer require ueberdosis/prosemirror-to-html
```

## Usage
```php
(new \ProseMirrorToHtml\Renderer)->render([
    'type' => 'doc',
    'content' => [
        [
            'type' => 'paragraph',
            'content' => [
                [
                    'type' => 'text',
                    'text' => 'Example Paragraph',
                ],
            ],
        ],
    ],
])
```

## Output
```html
<p>Example Text</p>
```

## Supported nodes
- [Blockquote](https://github.com/ueberdosis/prosemirror-to-html/blob/main/src/Nodes/Blockquote.php)
- [BulletList](https://github.com/ueberdosis/prosemirror-to-html/blob/main/src/Nodes/BulletList.php)
- [CodeBlock](https://github.com/ueberdosis/prosemirror-to-html/blob/main/src/Nodes/CodeBlock.php)
- [HardBreak](https://github.com/ueberdosis/prosemirror-to-html/blob/main/src/Nodes/HardBreak.php)
- [Heading](https://github.com/ueberdosis/prosemirror-to-html/blob/main/src/Nodes/Heading.php)
- [Image](https://github.com/ueberdosis/prosemirror-to-html/blob/main/src/Nodes/Image.php)
- [ListItem](https://github.com/ueberdosis/prosemirror-to-html/blob/main/src/Nodes/ListItem.php)
- [OrderedList](https://github.com/ueberdosis/prosemirror-to-html/blob/main/src/Nodes/OrderedList.php)
- [Paragraph](https://github.com/ueberdosis/prosemirror-to-html/blob/main/src/Nodes/Paragraph.php)
- [Table](https://github.com/ueberdosis/prosemirror-to-html/blob/main/src/Nodes/Table.php)
- [TableCell](https://github.com/ueberdosis/prosemirror-to-html/blob/main/src/Nodes/TableCell.php)
- [TableHeader](https://github.com/ueberdosis/prosemirror-to-html/blob/main/src/Nodes/TableHeader.php)
- [TableRow](https://github.com/ueberdosis/prosemirror-to-html/blob/main/src/Nodes/TableRow.php)

## Supported marks
- [Bold](https://github.com/ueberdosis/prosemirror-to-html/blob/main/src/Marks/Bold.php)
- [Code](https://github.com/ueberdosis/prosemirror-to-html/blob/main/src/Marks/Code.php)
- [Italic](https://github.com/ueberdosis/prosemirror-to-html/blob/main/src/Marks/Italic.php)
- [Link](https://github.com/ueberdosis/prosemirror-to-html/blob/main/src/Marks/Link.php)
- [Strike](https://github.com/ueberdosis/prosemirror-to-html/blob/main/src/Marks/Strike.php)
- [Subscript](https://github.com/ueberdosis/prosemirror-to-html/blob/main/src/Marks/Subscript.php)
- [Superscript](https://github.com/ueberdosis/prosemirror-to-html/blob/main/src/Marks/Superscript.php)
- [Underline](https://github.com/ueberdosis/prosemirror-to-html/blob/main/src/Marks/Underline.php)

## Custom nodes
Define your custom nodes as PHP classes:
```php
<?php

class CustomNode extends \ProseMirrorToHtml\Nodes\Node
{
    protected $nodeType = 'custom';
    protected $tagName = 'marquee';
}
```

And register them:
```php
$renderer->addNode(CustomNode::class);
```

Or overwrite the enabled nodes:
```php
$renderer->withNodes([
    CustomNode::class,
]);
```

Or overwrite the enabled marks:
```php
$renderer->withMarks([
    Bold::class,
]);
```

Or replace just one mark or node:
```php
$renderer->replaceNode(
    CodeBlock::class, CustomCodeBlock::class
);

$renderer->replaceMark(
    Bold::class, CustomBold::class
);
```

## Contributing
Pull Requests are welcome.

## Credits
- [Hans Pagel](https://github.com/hanspagel)
- [sauerbraten](https://github.com/sauerbraten)
- [WiebkeVog](https://github.com/WiebkeVog)
- [All Contributors](../../contributors)

## Related packages
- [tiptap](https://github.com/ueberdosis/tiptap) by @ueberdosis
- [prosemirror-to-html-js](https://github.com/enVolt/prosemirror-to-html) by @enVolt

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
