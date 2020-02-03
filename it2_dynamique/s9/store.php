<?php 
include("fonctions.php");
$infos=$_FILES['chemin'];
echo $infos['type'];
//name, type, size, tmp_name, error
$tmp=$infos['tmp_name'];
$nom=$infos['name'];
$chemin = "images/$nom";
 if(move_uploaded_file($tmp,$chemin)){
extract($_POST);
ajouter($libelle,$prix,$qte,$chemin);
header("location:index.php?s=ajout");
 }else{
     echo "erreur d'upload du ficher $nom";
 }
// $libelle=$_POST['libelle'];
// $prix=$_POST['prix'];
// $qte=$_POST['qte'];

?>

