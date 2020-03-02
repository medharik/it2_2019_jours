<?php 
include("fonctions.php");
$id=$_GET['id'];
supprimer($id);
header("location:index.php?s=yes");
?>