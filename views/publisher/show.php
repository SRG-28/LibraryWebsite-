<!DOCTYPE html>
<!-- file: views/publisher/show.php -->
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $title ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/normalize.css">
<link rel="stylesheet" href="/css/skeleton.css">
</head>
<body>
 <div class="container">
  <div class="row">
   <div class="eleven column" style="margin-top: 10%">
    <h2><?php echo $title ?></h2>
    <form>
     <div class="row">
      <div class="six columns">
       <label for="idInput">Id</label>
       <input class="u-full-width" type="number" readonly
          id="id" value="<?php echo $publisher['id']; ?>">
      </div>
      <div class="six columns">
       <label for="publisherInput">Publisher</label>
       <input class="u-full-width" type="text" readonly
          id="publisher" value="<?php echo $publisher['publisher']; ?>">
      </div>
      <div class="six columns">
       <label for="countryInput">Country</label>
       <input class="u-full-width" type="text" readonly
          id="country" value="<?php echo $publisher['country']; ?>">
      </div>
     </div>
     <div class="row">
      <div class="six columns">
       <label for="foundedInput">Founded</label>
       <input class="u-full-width" type="number" readonly
          id="founded" value="<?php echo $publisher['founded']; ?>">
      </div>
      <div class="six columns">
       <label for="genereInput">Genere</label>
       <input class="u-full-width" type="text" readonly
         id="genere" value="<?php echo $publisher['genere']; ?>">
      </div>
      <div class="six columns">
       <label for="books__book_idInput">Books__book_id</label>
       <input class="u-full-width" type="number" readonly
         id="books__book_id" value="<?php echo $publisher['books__book_id']; ?>">
      </div>
      <div class="six columns">
       <label for="books__titleInput">Books__title</label>
       <input class="u-full-width" type="text" readonly
         id="books__title" value="<?php echo $publisher['books__title']; ?>">
      </div>
     <a class="button button-primary" href="/publisher">Back</a>
     </div>
    </form>
   </div>
  </div>
 </div>
</body>




 
