<?php
  // file: routes.php 
 
  require_once('Book.php');
  Route::get('/', function() {
    return view('book',
      ['books'=>Book::all(),
       'title'=>'Books list']);
   
 }); 

Route::resource('author', 'AuthorController');

Route::get('/author/index','AuthorController@index');

Route::resource('publisher', 'PublisherController');

Route::get('/publisher/index','PublisherController@index');

Route::dispatch(); 

?> 
