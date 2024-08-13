<!DOCTYPE html>
<!-- file: views/author/show.php -->
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
          id="id" value="<?php echo $author['id']; ?>">
      </div>
      <div class="six columns">
       <label for="authorInput">Author</label>
       <input class="u-full-width" type="text" readonly
          id="author" value="<?php echo $author['author']; ?>">
      </div>
      <div class="six columns">
       <label for="nationalityInput">Nationality</label>
       <input class="u-full-width" type="text" readonly
          id="nationality" value="<?php echo $author['nationality']; ?>">
      </div>
     </div>
     <div class="row">
      <div class="six columns">
       <label for="birth_yearInput">Birth_year</label>
       <input class="u-full-width" type="number" readonly
          id="birth_year" value="<?php echo $author['birth_year']; ?>">
      </div>
      <div class="six columns">
       <label for="fieldsInput">Fields</label>
       <input class="u-full-width" type="text" readonly
         id="fields" value="<?php echo $author['fields']; ?>">
      </div>
      <div class="six columns">
       <label for="books__book_idInput">Books__book_id</label>
       <input class="u-full-width" type="number" readonly
         id="books__book_id" value="<?php echo $author['books__book_id']; ?>">
      </div>
      <div class="six columns">
       <label for="books__titleInput">Books__title</label>
       <input class="u-full-width" type="text" readonly
         id="books__title" value="<?php echo $author['books__title']; ?>">
      </div>
     <a class="button button-primary" href="/author">Back</a>
     </div>
    </form>
   </div>
  </div>
 </div>
</body>




 
