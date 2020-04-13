<?php  include("functions.php");
if(isset($_GET['np']) && !empty($_GET['np'])){
  $etudiant=rechercher($_GET['np']);//liste des etudiants ayant un nomprenom like $_GET['np']

}else{
  $etudiant=all("etudiant");

}

// $c=cumul_absence(5);
// var_dump($c);
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
<a  class="btn btn-primary  " href="create_etudiant.php">Nouveau</a>

</div>
    <h3 class="alert alert-info text-center mx-auto" style="width:50%">Liste des etudiants </h3>
<div class="container">
<div class="alert">
<form action="index_etudiant.php" method="get">
<fieldset>
<legend>Recherche : </legend>
Mot clé : <input type="text" name="np" id="np"> 
<button class="btn btn-primary">Ok</button>
</fieldset>

</form>

</div>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <td>Photo</td>
      <th scope="col">Nom & prenom</th>
      <th scope="col">Classe </th>
      <th scope="col">Cumul d'absence </th>
      <th scope="col">Actions</th>
  
    </tr>
  </thead>
  <tbody>
  <?php  foreach ($etudiant as $c) {
    ?>
    <tr>
      <th scope="row">
      <?=$c['id']?>
      </th>
      <th scope="row">
     <img src=" <?=$c['photo']?>" width="100" class="img-thumbnail">
      </th>

      <td> <?=$c['nomprenom']?></td>
      <td> <?php 
      $classe=find($c['classe_id'],"classe");
      echo $classe['nom'];
      ?></td>
  <td>
  <?php $cumul=cumul_absence($c['id']);
  echo $cumul['cumul'];
?>
  </td>
      <td><a href="controller.php?t=etudiant&a=delete&id= <?=$c['id']?>" class="btn btn-danger btn-small">Supprimer</a>
      <a href="" class="btn btn-warning btn-small">Modifier</a>
      <a href="show_absence.php?id=<?=$c['id']?>" class="btn btn-info btn-small">Journal d'absence</a></td>
    </tr>
  <?php } ?>
   
  </tbody>
</table>

</div>

<?php include ("_footer.php");?>
<?php include ("_scripts.php");?>
</body>
</html>