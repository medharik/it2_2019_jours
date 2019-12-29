<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nouveau contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php include("_menu.php");?>

<div class="container">
<div class="row">
<div class="col-md-6 shadow mx-auto p-3 mt-5">

<form action="add.php"   method="post" >

<div class="form-group">
    <label for="np">Nom & Prenom :</label>
    <input type="text" class="form-control" name="np" required autocomplete="off"  >
  </div>
<div class="form-group">
    <label for="email">Email  :</label>
    <input type="email" class="form-control" name="email" required>
</div>
<div class="form-group">
    <label for="passe">Mot de passe  :</label>
    <input type="password" class="form-control" 
    name="passe" required>
</div>
<button type="submit" class="btn btn-primary btn-block">Envoyer</button>



</form>
</div>
</div>
</div>
    
</body>
</html>