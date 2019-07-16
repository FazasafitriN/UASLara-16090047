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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing', function () {
    return view('landing');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/booking', function () {
    return view('pages.booking');
});
Route::get('/destinations', function () {
    return view('pages.destinasi');
});
Route::get('/semarang ambarawa', function () {
    return view('pages.semarang ambarawa');
});
Route::get('/dieng plateau', function () {
    return view('pages.dieng plateau');
});
Route::get('/mount slamet', function () {
    return view('pages.mount slamet');
});
Route::get('/blog', function () {
    return view('pages.blog');
});


//--------------------------------------admin
Route::get('/beranda', function () {
    return view('pages.admin.dash');
});

Route::get('/tambah', function () {
    return view('pages.admin.post');
});

Route::get('/post-wisata', function () {
    return view('pages.admin.post');
});

// Route::get('/post-pesan', function () {
//     return view('pages.admin.post');
// });

Route::resource('/list-post', 'BlogController');
Route::get('/add-post', 'BlogController@create')->name('add');
Route::get('/list-post', 'BlogController@index')->name('list');
Route::post('/add-post/post', 'BlogController@store');
Route::get('/list-post/delete/{id}', 'BlogController@destroy');
Route::get('/list-post/view/{id}', 'BlogController@show');
Route::get('/list-post/edit/{id}', 'BlogController@edit');
Route::get('/list-post/update/{id}', 'BlogController@update');

Route::get('/welcome', function () {
    return view('pages.admin.welcome');
});

Route::get('/post-list', function () {
    return view('pages.admin.view');
});