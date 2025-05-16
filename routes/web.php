<?php

use Illuminate\Support\Facades\Route;
use XMultibyte\Landing\Http\Controllers\LandingController;

Route::group([
    'prefix'    => 'landing',
    'as'        => 'landing.',
], function () {
    Route::resource('landing', LandingController::class)
    ->names([
        'create'  => 'landing.create',
        'store'   => 'landing.store',
        'edit'    => 'landing.edit',
        'update'  => 'landing.update',
        'show'    => 'landing.show',
        'index'   => 'landing.index',
        'destroy' => 'landing.destroy',
    ]);
});
