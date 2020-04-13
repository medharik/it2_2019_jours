<?php
session_start();
include("functions.php");
$login=$_SESSION['login']; 
$passe=$_SESSION['passe']; 
checker($login,$passe);

// si on a des elements a rechercher (depuis le form)
if(isset($_GET['nom_prenom']) && isset($_GET['matiere']) && isset($_GET['classe_id'])){
  $absences=rechercher_multi_critere($_GET['nom_prenom'],$_GET['matiere'], $_GET['classe_id']);
}else{// on a rien a rechercher =< on recupere le tout

  $absences=all("absence");

}

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
Bienvenue : <?=$_SESSION['nom'];?>
<div class="text-right mr-5">
<a  class="btn btn-primary  " href="create_absence.php">Nouveau</a>

</div>
    <h3 class="alert alert-info text-center mx-auto" style="width:50%">Liste des absences  :</h3>
<div class="container">
<div class="alert">
<form action="<?=basename(__FILE__)?>" method="get" id="form_recherche">
Nom & Prenom : <input type="text" name="nom_prenom" id="nom_prenom">
Matiere : <input type="text" name="matiere" id="nom_prenom">
Classe : <select name="classe_id" id="classe_id" onchange="search_class()">
<option value="" selected>...</option>
<?php  foreach($classes as $c) {?>
  <option value="<?=$c['id']?>"><?=$c['nom']?></option>
<?php } ?>
</select> 
<button class="btn btn-sm btn-primary">Rechercher</button>

</form>
</div>
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

<script>
function search_class(){

let  f=document.getElementById('form_recherche');
f.submit();


}

</script>
</body>
</html>