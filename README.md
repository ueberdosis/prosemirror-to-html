# ProseMirror to HTML

Takes ProseMirror JSON and outputs HTML.

[![](https://img.shields.io/packagist/v/scrumpy/prosemirror-to-html.svg)](https://packagist.org/packages/scrumpy/prosemirror-to-html)
[![](https://img.shields.io/packagist/dt/scrumpy/prosemirror-to-html.svg)](https://packagist.org/packages/scrumpy/prosemirror-to-html)
[![](https://api.travis-ci.org/scrumpy/prosemirror-to-html.svg?branch=master)](https://travis-ci.org/scrumpy/prosemirror-to-html)

## Installation

```bash
composer require scrumpy/prosemirror-to-html
```

## Usage

```php
(new \Scrumpy\ProseMirrorToHtml\Renderer)->render([
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

## Custom Nodes

Define your custom nodes as PHP classes:

```php
<?php

class CustomNode extends \Scrumpy\ProseMirrorToHtml\Nodes\Node
{
    public function matching()
    {
        return $this->node->type === 'custom';
    }

    public function tag()
    {
        return 'marquee';
    }
}
```

And register them:

```php
$renderer->addNode(CustomNode::class);
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
