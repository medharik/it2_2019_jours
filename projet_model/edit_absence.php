<?php 
include("functions.php");
$id=$_GET['id'];
$nombreHeure=$_GET['nombreHeure'];
$date_absence=$_GET['date_absence'];
$matiere=$_GET['matiere'];
$absennce=find($id,"absence");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification de la classe</title>
    <?php include ("_css.php");?>
</head>
<body>

<?php  echo  random_int(1,12)?>
   <h3 class="alert alert-info text-center mx-auto" style="width:50%">Modification de la  Fiche d'absence :</h3>
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto shadow">
            <form action="controller.php?t=absence&a=update" method="post">
      <input type="hidden" name="id" value="<?=$absence['id']?>">
      <div class="form-group">
      <label for="nombreHeure">
      nombreHeure : </label>
         
            <input type="text" class="form-control" name="nombreHeure" id="nombreHeure" value="<?=$absence['nombreHeure']?>">
            </div>
            <div class="form-group">
      <label for="nombreHeure">
            Nombre heure : </label>
         
            <input type="text" class="form-control" name="nombreHeure" id="nombreHeure" value="<?=$absence['nombreHeure']?>">
            </div>
         
            <div class="form-group">
            <button class="btn btn-primary">Modifier la fiche d'absence</button>            </div>
            </form>
        </div>
    </div>
</div>

<?php include ("_footer.php");?>
<?php include ("_scripts.php");?>
</body>
</html>