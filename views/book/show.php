<!DOCTYPE html>
<!-- file: views/book/show.php -->
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
          id="id" value="<?php echo $book['id']; ?>">
      </div>
      <div class="six columns">
       <label for="titleInput">Title</label>
       <input class="u-full-width" type="text" readonly
          id="title" value="<?php echo $book['title']; ?>">
      </div>
      <div class="six columns">
       <label for="editionInput">Edition</label>
       <input class="u-full-width" type="text" readonly
          id="edition" value="<?php echo $book['edition']; ?>">
      </div>
     </div>
     <div class="row">
      <div class="six columns">
       <label for="copyrightInput">Copyright</label>
       <input class="u-full-width" type="number" readonly
          id="copyright" value="<?php echo $book['copyright']; ?>">
      </div>
      <div class="six columns">
       <label for="languageInput">Language</label>
       <input class="u-full-width" type="text" readonly
         id="language" value="<?php echo $book['language']; ?>">
      </div>
      <div class="six columns">
       <label for="pagesInput">Pages</label>
       <input class="u-full-width" type="number" readonly
         id="pages" value="<?php echo $book['pages']; ?>">
      </div>
      <div class="six columns">
       <label for="authorInput">Author</label>
       <input class="u-full-width" type="text" readonly
         id="author" value="<?php echo $book['author']; ?>">
      </div>
      <div class="six columns">
       <label for="author_idInput">Author_id</label>
       <input class="u-full-width" type="number" readonly
         id="author_id" value="<?php echo $book['author_id']; ?>">
      </div>
      <div class="six columns">
       <label for="publisherInput">Publisher</label>
       <input class="u-full-width" type="text" readonly
         id="publisher" value="<?php echo $book['publisher']; ?>">
      </div>
      <div class="six columns">
       <label for="publisher_idInput">Publisher_id</label>
       <input class="u-full-width" type="number" readonly
         id="publisher_id" value="<?php echo $book['publisher_id']; ?>">
      </div>
     <a class="button button-primary" href="/book">Back</a>
     </div>
    </form>
   </div>
  </div>
 </div>
</body>




 
