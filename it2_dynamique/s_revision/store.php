<?php 
//var_dump($_POST);
$libelle=$_POST['libelle'];
$prix=$_POST['prix'];
$qte=$_POST['qtestock'];
//connexion db
$link=mysqli_connect("localhost","root","","dbrevision2021");
//prepare requete sql
$requete=sprintf("insert into produit(libelle,prix,qtestock)  values ('%s',%f,%d)",$libelle,$prix,$qte);
//$requete="insert into produit(libelle,prix,qtestock)  values ('$libelle',$prix,$qtestock)";
//execute
mysqli_query($link,$requete);
header("location:index.php");
?>
