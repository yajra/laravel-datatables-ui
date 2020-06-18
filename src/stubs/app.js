/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

require('./vendor/dataTables.default');

/**
 * When using DataTable Editor, it is advisable to use the assets below than the buttons.server-side.js script.
 * Note: buttons.server-side.js have a conflict create button for Editor.
 */
require('./vendor/buttons.server-side');
// require('laravel-datatables-assets/js/dataTables.buttons');
// require('laravel-datatables-assets/js/dataTables.renderers');
// require('laravel-datatables-assets/js/dataTables.callbacks');
