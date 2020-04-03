<?php 
include("functions.php");
$etudiants=all("etudiant");

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

<?php  echo  random_int(1,12)?>
   <h3 class="alert alert-info text-center mx-auto" style="width:50%">Fiche d'absence :</h3>
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto shadow">
            <form action="controller.php?t=absence&a=store" method="post">
      <div class="form-group">
      <label for="date_absence ">
      date D'absence : </label>
         
            <input type="date" class="form-control" name=" date_absence" id=" date_absence ">
            </div>
            <div class="form-group">
      <label for="nombreHeure  ">
      nombre D'heure  : </label>
         
            <input type="number" class="form-control" name="nombreHeure" id="nombreHeure">
            </div>
            <div class="form-group">
      <label for="matiere">
      matiere  : </label>
         
            <input type="text" class="form-control" name="matiere" id="matiere">
            </div>
            
            <div class="form-group">
            <button class="btn btn-primary">Ajouter Absence</button>            </div>
         
        </div>
    </div>
</div>
<hr>

<h2 class="alert alert-info text-center">Liste des etudiants</h2>
<div class="container">
    <div class="row">
<?php 
foreach($etudiants as $e){

?>
        <div class="col-md-4 border shadow  text-center">
        <label >
        <input type="checkbox" name="etudiant_id[]" value="<?=$e['id']?>">
        <img src="<?=$e['photo']?>" alt="">
        <h4 class="text-primary text-center"><?=$e['nomprenom']?> </h4>
        </label>
        </div>
<?php } ?>

    </div>


</div>
</form>
<br>
<br>
<br>
<br>
<br>
<?php include ("_footer.php");?>
<?php include ("_scripts.php");?>
</body>
</html>