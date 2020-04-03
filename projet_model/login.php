<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<?php include("_css.php");?>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto shadow p-2 mt-3">
            <?php      
            if(isset($_GET['cn']) && $_GET['cn']=="no" ){
            ?>
<div class="alert alert-danger">
Login/mot de passe incorrectes
</div>
            <?php } ?>
            <form action="check.php" method="post">
            <div class="form-group">
                    <label for="login">login : </label><input class="form-control" type="text" name="login" id="login">
                     </div>
                     <div class="form-group">
                       <label for="passe">Mot de passe : </label>
                    <input class="form-control"  type="text" name="passe" id="passe">
            
                     
                     </div>
            <button class="btn btn-sm btn-primary">Connexion</button>
         
            
            </form>
            </div>
        </div>
    </div>



</body>
</html>