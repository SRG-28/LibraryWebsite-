<!DOCTYPE html>
<!-- file: views/author.php -->
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
      <tr><th>Id</th><th>Author</th><th>Nationality</th>
          <th>Birth_year</th><th>Fields</th>
          <th>Books__book_id</th><th>Books__title</th></tr>
       <?php foreach ($authors as $auth) { ?>
      <tr><td><?php echo $auth['id'] ?></td>
          <td><?php echo $auth['author'] ?></td>
          <td><?php echo $auth['nationality'] ?></td>
          <td><?php echo $auth['birth_year'] ?></td>
          <td><?php echo $auth['fields'] ?></td>
          <td><?php echo $auth['books__book_id'] ?></td>
          <td><?php echo $auth['books__title'] ?></td></tr>
       <?php } ?>
     </table>
    </div>
   </div>
 </div>
</body>