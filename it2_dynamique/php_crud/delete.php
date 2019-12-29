<?php 
$id=$_GET['id'];
// connexion bd
$link=mysqli_connect("localhost","root","","dbilan2019") or die("Erreur de connexion db");
//.requete sql 
$sql="delete from produit where id = $id";
//.executer la requete
mysqli_query($link,$sql) or die("Erreur d'ajout du produit ".mysqli_error($link));
//redirection vers la page  index (liste des produits)
header("location:index.php?m=Suppression ok");
?>