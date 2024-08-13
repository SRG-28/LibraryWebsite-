<?php
  // file: controllers/BookController.php

  require_once('Book.php');
  
  class BookController extends Controller {
    
    public function index() {  
      return view('book/index',
       ['books'=>Book::all(),
        'title'=>'Books List']);
    }

    public function show($id) {
      $boo = Book::find($id);
      return view('book/show',
        ['book'=>$boo ,
         'title'=>'Book Detail']);
    }
  }
?>