<!DOCTYPE html>
<!-- file: views/publisher/index.php -->
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
     <tr><th>Id</th><th>Publisher</th><th>Country</th>
        <th>Founded</th><th>Genere</th>
        <th>Books__book_id</th>
        <th>books__title</th></tr> 
      </thead><tbody>
       <?php foreach ($publishers as $publ) { ?>
      <tr><td><a href="publisher/<?php echo $publ['id'] ?>">
          <?php echo $publ['id'] ?></a></td>
      <td><?php echo $publ['publisher'] ?></td>
      <td><?php echo $publ['country'] ?></td>
      <td><?php echo $publ['founded'] ?></td>
      <td><?php echo $publ['genere'] ?></td>
      <td><?php echo $publ['books__book_id'] ?></td>
      <td><?php echo $publ['books__title'] ?></td></tr>
       <?php } ?></tbody>
     </table>
    </div>
   </div>
 </div>
</body>

