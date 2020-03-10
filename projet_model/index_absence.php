<?php  include("functions.php");

$absences=all("absence");
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
<a  class="btn btn-primary  " href="create_absence.php">Nouveau</a>

</div>
    <h3 class="alert alert-info text-center mx-auto" style="width:50%">Liste des absences  :</h3>
<div class="container">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Etudiant_id</th>
      <th scope="col">Date d'absence</th>
      <th scope="col">Nombre d'heure</th>
      <th scope="col">Matiere</th>
      <th scope="col">Actions</th>
  
    </tr>
  </thead>
  <tbody>
  <?php  foreach ($absences as $c) {
    ?>
    <tr>
      <th scope="row">
      <?=$c['id']?>
      </th>
      <?php 
  $etudiant=    find($c['etudiant_id'],"etudiant");
      
      ?>
      <td> <?=$etudiant['nomprenom']?></td>
      <td> <?=$c['date_absence']?></td>
      <td> <?=$c['nombreHeure']?>H</td>
      <td> <?=$c['matiere']?></td>
  
      <td><a  onclick="return confirm('voulez vous vraiment supprimer cet element?')" href="controller.php?t=absence&a=delete&id= <?=$c['id']?>" class="btn btn-danger btn-small">Supprimer</a>
      <a href="edit_absence.php?id=<?=$c['id']?>" class="btn btn-warning btn-small">Modifier</a>
      <a href="show_absence.php?id=<?=$c['id']?>" class="btn btn-info btn-small"   >Consulter</a></td>
    </tr>
  <?php } ?>
   
  </tbody>
</table>

</div>

<?php include ("_footer.php");?>
<?php include ("_scripts.php");?>
</body>
</html>