<?php 
include("functions.php");
$etudiants=find($_GET['id'],'etudiant');
$absences=findBy("etudiant_id=".$_GET['id'],"absence");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("_css.php")?>
    <style>
  @media print {
body{
 padding-top:4cm;


}
button, a{
 display:none !important;


}

 .print {
    display:none !important;
   
 }


  }

    
    </style>
</head>
<body>
    <?php include("_menu.php")?>
   
<div class="container">
<button class="btn btn-primary btn-sm my-2" onclick="window.print()">Imprimer l'état d'absence </button>

<div class="row">
<div class="col-md-12">
<div class="row">
<div class="col-md-4">

<div class="card"  style="width:200px">
  <img src="<?=$etudiants['photo']?>" class="card-img-top" alt="...">
  <div class="card-body">
    </div>
</div>

</div>
<div class="col-md-8" >
<h4 class="text-center ">Etat d'absence de : </h4>


<div class="alert alert-info text-center">
<h5 class="card-title"><?=$etudiants['nomprenom']?></h5>

</div>
</div>

</div>
</div>
<div class="col-md-12">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date d'absence</th>
      <th scope="col">Nombre d'heure</th>
      <th scope="col">Matiere</th>
      <th class="print">Actions</th>
  
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
    
      <td> <?=$c['date_absence']?></td>
      <td> <?=$c['nombreHeure']?>H</td>
      <td> <?=$c['matiere']?></td>
  
      <td class="print"  ><a  onclick="return confirm('voulez vous vraiment supprimer cet element?')" href="controller.php?t=absence&a=delete&id= <?=$c['id']?>" class="btn btn-danger btn-small">S</a>
      <a href="edit_absence.php?id=<?=$c['id']?>" class="btn btn-warning btn-small">M</a>
      <a href="show_absence.php?id=<?=$c['id']?>" class="btn btn-info btn-small"   >C</a></td>
    </tr>
  <?php } ?>
   
  </tbody>
</table>
</div>
</div>
</div>




<?php include("_footer.php")?>

<?php include("_scripts.php")?>
</body>
</html>