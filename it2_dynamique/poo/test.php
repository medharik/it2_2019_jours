<?php 
include("produit.class.php");
//instancierune classe produit (classe) pour creer un objet $hp
$hp = new Produit("hp",8,0);

$hp->afficher();
$hp->verifierStock();

$dell = new Produit("dell ",5600);
$dell->afficher();
$dell->verifierStock();

$sony=new Produit("Sony vaio",3000,1000);
$sony->afficher();


?>