<?php

namespace Yajra\DataTables\Ui;

use Laravel\Ui\Presets\Preset;

class DataTables extends Preset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::updatePackages();
        static::updateSass();
        static::updateBootstrapping();
        static::removeNodeModules();
    }

    /**
     * Update the Sass files for the application.
     *
     * @return void
     */
    protected static function updateSass()
    {
        copy(__DIR__ . '/stubs/_variables.scss', resource_path('sass/_variables.scss'));
        copy(__DIR__ . '/stubs/app.scss', resource_path('sass/app.scss'));
    }

    /**
     * Update the bootstrapping files.
     *
     * @return void
     */
    protected static function updateBootstrapping()
    {
        copy(__DIR__ . '/stubs/app.js', resource_path('js/app.js'));
        copy(__DIR__ . '/stubs/bootstrap.js', resource_path('js/bootstrap.js'));
        mkdir(resource_path('js/vendor'));
        copy(__DIR__ . '/stubs/dataTables.default.js', resource_path('js/vendor/dataTables.default.js'));
        copy(base_path('vendor/yajra/laravel-datatables-buttons/src/resources/assets/buttons.server-side.js'), resource_path('js/vendor/buttons.server-side.js'));
    }

    /**
     * Update the given package array.
     *
     * @param array $packages
     * @return array
     */
    protected static function updatePackageArray(array $packages)
    {
        return [
                'bootstrap'                       => '^4.0.0',
                'datatables.net-autofill-bs4'     => '^2.3.2',
                'datatables.net-bs4'              => '^1.10.19',
                'datatables.net-buttons-bs4'      => '^1.5.4',
                'datatables.net-colreorder-bs4'   => '^1.5.1',
                'datatables.net-editor'           => '^1.6.5',
                'datatables.net-editor-bs4'       => '^1.6.3',
                'datatables.net-fixedcolumns-bs4' => '^3.2.6',
                'datatables.net-fixedheader-bs4'  => '^3.1.5',
                'datatables.net-keytable-bs4'     => '^2.5.0',
                'datatables.net-plugins'          => '^1.10.19',
                'datatables.net-responsive-bs4'   => '^2.2.3',
                'datatables.net-rowgroup-bs4'     => '^1.1.0',
                'datatables.net-rowreorder-bs4'   => '^1.2.5',
                'datatables.net-scroller-bs4'     => '^1.5.1',
                'datatables.net-select-bs4'       => '^1.2.7',
                'jquery'                          => '^3.2',
                'laravel-datatables-assets'       => 'https://github.com/yajra/laravel-datatables-assets',
                'popper.js'                       => '^1.12',
            ] + $packages;
    }
}
