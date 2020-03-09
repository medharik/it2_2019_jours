<?php  include("functions.php");

$classes=all("classe");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau</title>
    <?php include ("_css.php");?>
</head>
<body>
<?php include ("_menu.php");?>
<div class="text-right mr-5">
<a  class="btn btn-primary  " href="create_classe.php">Nouveau</a>

</div>
    <h3 class="alert alert-info text-center mx-auto" style="width:50%">Liste des classes  :</h3>
<div class="container">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Actions</th>
  
    </tr>
  </thead>
  <tbody>
  <?php  foreach ($classes as $c) {
    ?>
    <tr>
      <th scope="row">
      <?=$c['id']?>
      </th>
      <td> <?=$c['nom']?></td>
  
      <td><a  onclick="return confirm('voulez vous vraiment supprimer cet element?')" href="controller.php?t=classe&a=delete&id= <?=$c['id']?>" class="btn btn-danger btn-small">Supprimer</a>
      <a href="edit_classe.php?id=<?=$c['id']?>" class="btn btn-warning btn-small">Modifier</a>
      <a href="show_classe.php?id=<?=$c['id']?>" class="btn btn-info btn-small"   >Consulter</a></td>
    </tr>
  <?php } ?>
   
  </tbody>
</table>

</div>

<?php include ("_footer.php");?>
<?php include ("_scripts.php");?>
</body>
</html>