<!DOCTYPE html>
<!-- file: views/publisher.php -->
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
      <tr><th>Id</th><th>Publisher</th><th>Country</th>
          <th>Founded</th><th>Genere</th>
          <th>books__book_id</th><th>Books__title</th></tr>
       <?php foreach ($publishers as $publ) { ?>
      <tr><td><?php echo $publ['id'] ?></td>
          <td><?php echo $publ['publisher'] ?></td>
          <td><?php echo $publ['country'] ?></td>
          <td><?php echo $publ['founded'] ?></td>
          <td><?php echo $publ['genere'] ?></td>
          <td><?php echo $publ['books__book_id'] ?></td>
          <td><?php echo $publ['books__title'] ?></td></tr>
       <?php } ?>
     </table>
    </div>
   </div>
 </div>
</body>