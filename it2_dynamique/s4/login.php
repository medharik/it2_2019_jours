<?php 
$message="";
if(  isset($_GET['v']) && $_GET['v']=="vide"   ){
    
  
    $message="tous les champs sont requis";
}
if(  isset($_GET['v']) && $_GET['v']=="no"   ){
    
  
    $message="Login/mot de passe incorrects";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto shadow p-2 m-2">
        <div class="alert alert-danger">
        <?= $message ?>
        </div>
        <form action="check.php">
        <div class="form-group">
        
        <label for="">Pseudo</label>
        <input type="text" class="form-control" name="pseudo">
        </div>
        <div class="form-group">
        
        <label for="">Email</label>
        <input type="text" class="form-control" name="email">
        </div>
        <div class="form-group">
        
        <label for="">Mot de passe </label>
        <input type="text" class="form-control" name="passe">
        </div>
        
        <button class="btn btn-primary btn-block">Valider</button>
        </form>
        
        </div>
    </div>
</div>
    
</body>
</html>