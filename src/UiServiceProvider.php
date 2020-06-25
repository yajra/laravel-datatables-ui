<?php

namespace Yajra\DataTables\Ui;

use Laravel\Ui\UiCommand;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class UiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerCommand();
        $this->registerViews();

        Blade::include('datatables-ui::data-table', 'dataTable');
    }

    protected function registerCommand(): void
    {
        UiCommand::macro('dt', function (UiCommand $command) {
            DataTables::install();

            $command->info('DataTables scaffolding installed successfully.');
            $command->comment('When using Editor, you must add this script on package.json: "postinstall": "node ./node_modules/datatables.net-editor/install.js ./path-to/Editor.zip".');
            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });
    }

    protected function registerViews(): void
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'datatables-ui');

        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__ . '/views' => resource_path('views/vendor/datatables-ui')], 'datatables-ui');
        }
    }
}
