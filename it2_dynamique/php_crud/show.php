<?php 
$id=$_GET['id'];
// connexion bd
$link=mysqli_connect("localhost","root","","dbilan2019") or die("Erreur de connexion db");
//.requete sql 
$sql="select *  from produit where id = $id";
//.executer la requete
$resultat=mysqli_query($link,$sql) or die("Erreur consultation produit ".mysqli_error($link));
$produit=mysqli_fetch_assoc($resultat);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>consulter produit</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
</head>
<body>
<div class="card" style="width: 18rem;">
  <img src="http://placehold.it/200x200" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">
    LIBELLE :    <?=$produit['libelle']?>
    </h5>
    <p class="card-text">
  COUT :   <?=$produit['cout']?>DHS
<br>
PRIX : <?=$produit['prix']?>DHS

<br>
QTE : <?=$produit['qtestock']?>

    </p>
    <a href="index.php" class="btn btn-primary">Accueil</a>
  </div>
</div>
    
</body>
</html>