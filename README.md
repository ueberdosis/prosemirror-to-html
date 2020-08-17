> We need your support to maintain this package. 💖 https://github.com/sponsors/ueberdosis

# ProseMirror to HTML

Takes ProseMirror JSON and outputs HTML.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ueberdosis/prosemirror-to-html.svg)](https://packagist.org/packagesueberdosis/prosemirror-to-html)
[![Integrate](https://github.com/ueberdosis/html-to-prosemirror/workflows/Integrate/badge.svg?branch=main)](https://github.com/ueberdosis/html-to-prosemirror/actions)
[![Total Downloads](https://img.shields.io/packagist/dt/ueberdosis/prosemirror-to-html.svg?style=flat-square)](https://packagist.org/packages/ueberdosis/prosemirror-to-html)

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

## Supported Nodes

- Blockquote
- BulletList
- CodeBlock
- HardBreak
- Heading
- ListItem
- OrderedList
- Paragraph
- Table
- TableRow
- TableHeader
- TableCell

## Supported Marks

- Bold
- Code
- Italic
- Link
- Strike
- Subscript
- Superscript
- Underline

## Custom Nodes

Define your custom nodes as PHP classes:

```php
<?php

class CustomNode extends \ProseMirrorToHtml\Nodes\Node
{
    protected $markType = 'custom';
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

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
