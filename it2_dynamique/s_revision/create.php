<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nouveau produit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php include("menu.php");?>
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto shadow p-2">
        <form action="store.php" method="post">
  <div class="form-group">
    <label for="libelle">libelle : </label>
    <input type="text" required class="form-control" name="libelle" id="libelle" >
  </div>
  <div class="form-group">
    <label for="prix">prix :</label>
    <input type="text" class="form-control" name="prix" id="prix" >
  </div>
  <div class="form-group">
    <label for="qtestock">Quantite : </label>
    <input required type="number" class="form-control" name="qtestock" id="qtestock" >
  </div>
  
 
  <button type="submit" class="btn btn-warning col-md-6 mx-auto d-block">Ajouter </button>
</form>
        
        </div>
    </div>
</div>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
</body>
</html>