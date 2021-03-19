<?php

use Illuminate\Support\Facades\Route;

Route::get('products', function () {
    return view('products.index');
});

// Route::put('/', function() {
//     return 'Url raíz por el método post';
// });

// Route::post();

// Route::put();

// Route::delete();
