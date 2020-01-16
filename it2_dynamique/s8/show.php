<?php 
include("fonctions.php");


$id=$_GET['id'];

$ligne=consulter($id);
if(empty($ligne)){
    header("location:index.php?s=no_prod");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>consultation</title>
</head>
<body>
<div>

<h2>Details du produit : <?=$ligne['libelle'];?> </h2>
<ul>
    <li>Prix :  <?=$ligne['prix'];?> DHS</li>
    <li>Qte en stock :  <?=$ligne['quantite'];?></li>
</ul>
</div>
    
</body>
</html>