<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Esta es la url raíz';
});

Route::put('/', function() {
    return 'Url raíz por el método post';
});

// Route::post();

// Route::put();

// Route::delete();
