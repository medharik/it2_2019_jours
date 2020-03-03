<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau</title>
    <?php include ("_css.php");?>
</head>
<body>

<?php  echo  random_int(1,12)?>
   <h3 class="alert alert-info text-center mx-auto" style="width:50%">Nouvelle classe :</h3>
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto shadow">
            <form action="controller.php?t=classe&a=store" method="post">
      <div class="form-group">
      <label for="nom">
            Nom: </label>
         
            <input type="text" class="form-control" name="nom" id="nom"></div>
            <div class="form-group">
            <button class="btn btn-primary">Ajouter la classe</button>            </div>
            </form>
        </div>
    </div>
</div>

<?php include ("_footer.php");?>
<?php include ("_scripts.php");?>
</body>
</html>