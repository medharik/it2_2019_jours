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
   <h3 class="alert alert-info text-center mx-auto" style="width:50%">Fiche d'absence :</h3>
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto shadow">
            <form action="controller.php?t=absence&a=store" method="post">
      <div class="form-group">
      <label for="date_absence ">
      date_absence : </label>
         
            <input type="text" class="form-control" name=" date_absence" id=" date_absence ">
            </div>
            <div class="form-group">
      <label for="nombreHeure  ">
      nombreHeure  : </label>
         
            <input type="text" class="form-control" name="nombreHeure" id="nombreHeure">
            </div>
            <div class="form-group">
      <label for="matiere">
      matiere  : </label>
         
            <input type="text" class="form-control" name="matiere" id="matiere">
            </div>
            <div class="form-group">
      <label for="etudiant_id">
      Etudiant  : </label>
         
            <input type="text" class="form-control" name="etudiant_id" id="etudiant_id">
            </div>
            <div class="form-group">
            <button class="btn btn-primary">Ajouter Absence</button>            </div>
            </form>
        </div>
    </div>
</div>

<?php include ("_footer.php");?>
<?php include ("_scripts.php");?>
</body>
</html>