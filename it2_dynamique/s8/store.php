<?php 
include("fonctions.php");

$libelle=$_POST['libelle'];
$prix=$_POST['prix'];
$qte=$_POST['qte'];

ajouter($libelle,$prix,$qte);

?>

<h2>ajout de <?php echo $libelle?> effectue avec succes</h2>