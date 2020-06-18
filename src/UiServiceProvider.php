<?php

namespace Yajra\DataTables\Ui;

use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;

class UiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        UiCommand::macro('dt', function (UiCommand $command) {
            DataTables::install();

            $command->info('DataTables scaffolding installed successfully.');
            $command->comment('When using Editor, you must add this script: "postinstall": "node ./node_modules/datatables.net-editor/install.js ./path-to/Editor.zip".');
            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });
    }
}
