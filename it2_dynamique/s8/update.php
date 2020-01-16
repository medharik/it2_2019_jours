<?php 
include("fonctions.php");
extract($_POST);
modifier($libelle,$prix,$qte,$id);
header("location:index.php?s=upd");


?>