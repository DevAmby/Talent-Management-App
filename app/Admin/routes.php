<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Admin;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('users', UserController::class);
    $router->resource('personals', PersonalController::class);
    $router->resource('credentials', CredentialsController::class);
    $router->resource('preferences', PreferencesController::class);
    $router->resource('experiences', ExperiencesController::class);

});
