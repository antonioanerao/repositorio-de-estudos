<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocsController;

if (! defined('DEFAULT_VERSION')) {
    define('DEFAULT_VERSION', '1.x');
}

Route::get('docs', [DocsController::class, 'showRootPage']);

Route::get('docs/{version}/{page?}', [DocsController::class, 'show'])->name('docs.version');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
