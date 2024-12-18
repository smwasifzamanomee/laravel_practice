<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('app'); // Adjust the view path if necessary
});

Route::get('/product', 'ProductController@index')->name('product');
Route::post('/product', 'ProductController@store')->name('product.store');
Route::delete('/product/delete/{id}', 'ProductController@destroy')->name('product.destroy');
Route::get('/product/edit/{id}', 'ProductController@edit')->name('product.edit');
Route::put('/product/update/{id}', 'ProductController@update')->name('product.update');
