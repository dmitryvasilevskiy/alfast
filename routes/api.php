<?php

use Illuminate\Http\Request;

Route::post('item', 'Api\ItemController@store')->name('api.item.store');