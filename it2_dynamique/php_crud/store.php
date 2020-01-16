<?php 
// $libelle=$_POST['libelle'];
// $prix=$_POST['prix'];

extract($_POST);// cree  4 variables : $libelle, $prix, ...
// connexion bd
$link=mysqli_connect("localhost","root","","dbilan2019") or die("Erreur de connexion db");
//.requete sql 
$sql="insert into produit(libelle,prix,cout,qtestock) values ('$libelle',$prix,$cout,$qtestock)";
//.executer la requete
mysqli_query($link,$sql) or die("Erreur d'ajout du produit ".mysqli_error($link));
//redirection vers la page  index (liste des produits)
header("location:index.php?m=Ajout OK");