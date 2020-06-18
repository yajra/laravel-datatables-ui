# Laravel DataTables UI Preset

[![Latest Version on Packagist](https://img.shields.io/packagist/v/yajra/laravel-datatables-ui.svg?style=flat-square)](https://packagist.org/packages/yajra/laravel-datatables-ui)
[![Total Downloads](https://img.shields.io/packagist/dt/yajra/laravel-datatables-ui.svg?style=flat-square)](https://packagist.org/packages/yajra/laravel-datatables-ui)

Laravel DataTables UI Preset to setup most of the scripts and css required for a DataTables powered projects.

## Installation

You can install the package via composer:

```bash
composer require yajra/laravel-datatables-ui
```

## Usage

Once the package has been installed, you may install the frontend scaffolding using the ui Artisan command:

```bash
// Generate basic scaffolding...
php artisan ui dt

// Generate login / registration scaffolding...
php artisan ui dt --auth
```

## Usage with DataTables Editor

If you have license and want to use Editor, you need to setup the following:

1. Enable editor library on `bootstrap.js`

```js
require('datatables.net-editor-bs4');
```

2. Use `laravel-datatables-assets` package instead of `buttons.server-side.js` script on `app.js`.

```js
//require('./vendor/buttons.server-side');
require('laravel-datatables-assets/js/dataTables.buttons');
```

3. Add `postinstall` script on package,json

```js
    "scripts": {
        "dev": "npm run development",
        ...,
        "postinstall": "node ./node_modules/datatables.net-editor/install.js ./Editor.zip"
    },
```

4. Download your copy of Editor Library JS + CSS file and save as `Editor.zip`.
5. Move `Editor.zip` to your project base directory.
6. Run `npm install && npm run dev`  to compile changes.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email aqangeles@gmail.com instead of using the issue tracker.

## Credits

- [Arjay Q. Angeles](https://github.com/yajra)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
