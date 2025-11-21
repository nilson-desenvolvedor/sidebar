<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', fn() => view('welcome'))->name('home');
Route::get('/install', fn() => view('install'))->name('install');
Route::get('/dark', fn() => view('dark'))->name('theme-dark');
Route::get('/light', fn() => view('light'))->name('theme-light');
Route::get('/pg-sem-tema', fn() => view('pg1'));
Route::get('/pg-sem-icones', fn() => view('pg2'))->name('sem-icones');
Route::get('/sem-layout-com-sidebar', fn() => view('pg3'));
Route::get('/com-layout-sem-sidebar', fn() => view('pg4'));
Route::get('/sem-layout-sem-sidebar', fn() => view('pg5'));
Route::get('/simple1', fn() => view('simple'))->name('simple1');
Route::get('/simple2', fn() => view('simple'))->name('simple2');
Route::get('/simple3', fn() => view('simple'))->name('simple3');
Route::get('/simple4', fn() => view('simple'))->name('simple4');
Route::get('/simple5', fn() => view('simple'))->name('simple5');