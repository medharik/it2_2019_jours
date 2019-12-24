<?php 
//recuperer les donnees depuis le form
$libelle =$_GET['libelle'];
$prix =$_GET['prix'];
$qtestock =$_GET['qtestock'];
// connexion avec la base de donnees 

$link=mysqli_connect("localhost","root","","it2019") or die("Erreur connexion bd");
//preparer une requete
$requete="insert into produit(libelle,prix,quantite) values('$libelle',$prix,$qtestock)";
//executer la requete 
mysqli_query($link,$requete) or die("Erreur d'ajout");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Ajout effectue avec succes</h3>
    
</body>
</html>