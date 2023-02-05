<?php


Route::get('/', function () {
    return view('welcome');
});
Route::get('items', 'ItemController@index')->name('item.index');