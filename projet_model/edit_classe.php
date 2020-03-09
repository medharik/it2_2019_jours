<?php 
include("functions.php");
$id=$_GET['id'];
$classe=find($id,"classe");
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
   <h3 class="alert alert-info text-center mx-auto" style="width:50%">Modification de la  classe :</h3>
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto shadow">
            <form action="controller.php?t=classe&a=update" method="post">
      <input type="hidden" name="id" value="<?=$classe['id']?>">
      <div class="form-group">
      <label for="nom">
            Nom: </label>
         
            <input type="text" class="form-control" name="nom" id="nom" value="<?=$classe['nom']?>"></div>
         
            <div class="form-group">
            <button class="btn btn-primary">Modifier la classe</button>            </div>
            </form>
        </div>
    </div>
</div>

<?php include ("_footer.php");?>
<?php include ("_scripts.php");?>
</body>
</html>