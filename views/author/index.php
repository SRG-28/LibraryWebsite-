<!DOCTYPE html>
<!-- file: views/author/index.php -->
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
     <table><thead>
     <tr><th>Id</th><th>Author</th><th>Nationality</th>
        <th>Birth_year</th><th>Fields</th>
        <th>Books__book_id</th>
        <th>books__title</th></tr> 
      </thead><tbody>
       <?php foreach ($authors as $auth) { ?>
      <tr><td><a href="author/<?php echo $auth['id'] ?>">
          <?php echo $auth['id'] ?></a></td>
      <td><?php echo $auth['author'] ?></td>
      <td><?php echo $auth['nationality'] ?></td>
      <td><?php echo $auth['birth_year'] ?></td>
      <td><?php echo $auth['fields'] ?></td>
      <td><?php echo $auth['books__book_id'] ?></td>
      <td><?php echo $auth['books__title'] ?></td></tr>
       <?php } ?></tbody>
     </table>
    </div>
   </div>
 </div>
</body>

