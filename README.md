# HTML to ProseMirror

Takes HTML and outputs ProseMirror compatible JSON.

<!-- [![](https://img.shields.io/packagist/v/scrumpy/prosemirror-to-html.svg)](https://packagist.org/packages/scrumpy/prosemirror-to-html)
[![](https://img.shields.io/packagist/dt/scrumpy/prosemirror-to-html.svg)](https://packagist.org/packages/scrumpy/prosemirror-to-html) -->
[![](https://api.travis-ci.org/scrumpy/prosemirror-to-html.svg?branch=master)](https://travis-ci.org/scrumpy/prosemirror-to-html)

## Installation

```bash
composer require scrumpy/prosemirror-to-html
```

## Usage

```php
(new \Scrumpy\ProseMirrorToHtml\Renderer)->render('<p>Example Text</p>')
```

## Output

```json
{
    "type": "doc",
    "content": [
        {
            "type": "paragraph",
            "content": [
                {
                    "type": "text",
                    "text": "Example Text"
                }
            ]
        }
    ]
}
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Hans Pagel](https://github.com/hanspagel)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.