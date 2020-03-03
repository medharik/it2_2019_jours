<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>etudiant</title>
    <?php include ("_css.php");?>
</head>
<body>
<h3 class="alert alert-info text-center mx-auto" style="width:50%">Nouveau etudiant :</h3>
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto shadow">
            <form action="controller.php?t=etudiant&a=store" method="post">
      <div class="form-group">
      <label for="nom">
            Nom: </label>
         
            <input type="text" class="form-control" name="nom" id="nom"></div>
            <div class="form-group">
            <div class="form-group">
      <label for="nom">
            prenom: </label>
         
            <input type="text" class="form-control" name="prenom" id="prenom"></div>
            <div class="form-group">
            <button class="btn btn-primary">Ajouter etudiant</button>            </div>
            </form>
        </div>
    </div>
</div>

<?php include ("_footer.php");?>
<?php include ("_scripts.php");?>
</body>
</html>