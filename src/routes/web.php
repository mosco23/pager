<?php


use Illuminate\Support\Facades\Route;
use Mosco\Pager\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/{slug}.html', [DataController::class, 'makePage'])
    ->where('slug', '[A-Za-z-]+')
    ->name('page');