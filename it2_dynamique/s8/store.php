<?php 
include("fonctions.php");

// $libelle=$_POST['libelle'];
// $prix=$_POST['prix'];
// $qte=$_POST['qte'];
extract($_POST);
ajouter($libelle,$prix,$qte);
header("location:index.php?s=ajout");
?>

