<!DOCTYPE html>
<!-- file: views/book.php -->
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
     <table>
      <tr><th>Id</th><th>Title</th><th>Edition</th>
          <th>Copyright</th><th>Language</th>
          <th>Pages</th><th>Author</th>
          <th>Author_id</th><th>Publisher</th>
          <th>Publisher_id</th></tr>
       <?php foreach ($books as $boo) { ?>
      <tr><td><?php echo $boo['id'] ?></td>
          <td><?php echo $boo['title'] ?></td>
          <td><?php echo $boo['edition'] ?></td>
          <td><?php echo $boo['copyright'] ?></td>
          <td><?php echo $boo['language'] ?></td>
          <td><?php echo $boo['pages'] ?></td>
          <td><?php echo $boo['author'] ?></td>
          <td><?php echo $boo['author_id'] ?></td>
          <td><?php echo $boo['publisher'] ?></td>
          <td><?php echo $boo['publisher_id'] ?></td></tr>
       <?php } ?>
     </table>
    </div>
    <br><a class="button button-primary" href="/publisher/index">Publisher</a> <br>
    <a class="button button-primary" href="/author/index">Author</a>
   </div>
 </div>
</body>