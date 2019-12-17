<?php 
//recuperer les donnees depuis le form
$libelle =$_GET['libelle'];
$prix =$_GET['prix'];
// $qtestock =$_GET['qtestock'];

// connexion avec la bd
$link=mysqli_connect("localhost","root","","db22019") or die("erreur de connexion db");
// prepare une requete sql (insert)
$sql="insert into produit(libelle,prix) values ('$libelle',$prix)";
//executer la requete
mysqli_query($link,$sql) or die("Erreur de requete ".mysqli_error($link));

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
<h3>Ajout ok</h3>
    
</body>
</html>