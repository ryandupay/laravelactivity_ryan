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

Route::get('/', function () { return view('welcome'); });
Route::get('/hayato', function () { return view('hayato'); });
Route::get('/naoki', function () { return view('naoki'); });
Route::get('/homework', function () { return view('homework'); });
Route::get('/home', function () { return view('home'); });
Route::get('/master', function () { return view('master'); });
Route::get('/about', function () { return view('about'); });
Route::get('/login', function () { return view('login'); });
Route::get('/temp', function () { return view('temp'); });
Route::get('/activity', function () { 
    $data['food'] = 'coffee';
    return view('activity', compact('data')); 
});

Route::get('/profile', function () {
    $data['name'] = 'Ryan';
    $data['image'] = 'img/image.jpg';
    $data['age'] = '15';
    $data['address'] = 'Banilad, Mandaue City';
    $data['sex'] = 'Male';
    $data['email'] = 'ryandupay@gmail.com';
    $data['phone'] = '+639287413411';
    $data['employer'] = 'Sun Asterisk Philippines';
    $data['jobtitle'] = 'QA Team Leader';
    $data['jobdescription'] = 'Leader of QA Team';

    return view('profile', compact('data')); 
});

Route::get('/books', 'BookController@index')->name('books');;
Route::get('/book/create', 'BookController@create')->name('book.create');
Route::post('/book/store', 'BookController@store')->name('book.store');
Route::get('/book/{id}', 'BookController@show')->name('book.show');
Route::get('/book/{id}/edit', 'BookController@edit')->name('book.edit');
Route::post('/book/{id}/bookupdate', 'BookController@bookupdate')->name('book.bookupdate');
Route::get('/book/{id}/delete', 'BookController@delete')->name('book.delete');
Route::get('/book/{id}/upvote', 'BookController@upvote')->name('book.upvote');
Route::get('/book/{id}/downvote', 'BookController@downvote')->name('book.downvote');

