<?php 
$message="";
if(isset($_GET['m'])){
$message=$_GET['m'];
}
// connexion bd
$link=mysqli_connect("localhost","root","","dbilan2019") or die("Erreur de connexion db");
//.requete sql 
$sql="select * from produit";
//.executer la requete
$resultat=mysqli_query($link,$sql) or die("Erreur de selection des produits ".mysqli_error($link));

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Nouveau produit</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
  </head>
<body>
<?php include ("_menu.php") ?>
<?php if(isset($_GET['m']) ) { ?>
<div class="alert alert-info">
    <?=$message?>
</div>
<?php } ?>
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Libelle</th>
                <th>cout</th>
                <th>prix</th>
                <th>qte en stock</th>
                <th>Actions</th>
            </tr>
        </thead>
                <tbody>
<?php while($l=mysqli_fetch_assoc($resultat)){ ?>
                <tr>
                    <th><?=$l['id']?></th>
                    <th><?=$l['libelle']?></th>
                    <th><?=$l['cout']?></th>
                    <th><?=$l['prix']?></th>
                    <th><?=$l['qtestock']?></th>
                    <th><a href="delete.php?id=<?=$l['id']?>" class="btn btn-danger btn-sm">Supprimer</a>
                    <a href="" class="btn btn-warning btn-sm">Modifier</a>
                    <a href="show.php?id=<?=$l['id']?>" class="btn btn-info btn-sm">Consulter</a></th>
                </tr>

<?php } ?>
                </tbody>


    </table>
</div>
    
</body>
</html>