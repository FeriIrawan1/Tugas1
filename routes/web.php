<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/index', function () { 
 echo "<a href='".route('create')."'>akses route menggunakan nama </a>"; 
 
}); 
Route::get('/create', function () { 
 
echo "akses route dengan nama"; 
 })->name('create');
 
 Route::get('/produk', 'produkController@index');
 Route::get('/produk/show', 'produkController@show');
 
 Route::get('/halaman',function(){ $title = 'Harry Pooter'; $konten = 'harry potter and the deathly hallows: part 2'; return view('konten.halaman',compact('title','konten')); });
 
Route::get('/pelanggan', 'pelangganController@index');
Route::get('/produk', 'produkController@index');