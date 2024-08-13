<?php
  // file: controllers/PublisherController.php

  require_once('Publisher.php');
  
  class PublisherController extends Controller {
    
    public function index() {  
      return view('publisher/index',
       ['publishers'=>Publisher::all(),
        'title'=>'Publishers List']);
    }

    public function show($id) {
      $publ = Publisher::find($id);
      return view('publisher/show',
        ['publisher'=>$publ ,
         'title'=>'Publisher Detail']);
    }
  }
?>