<?php 
include("produit.class.php");
//instancier un objet de type produit (classe)
$hp = new Produit("hp dv 6",5000,0);

$hp->afficher();
$hp->verifierStock();

$dell = new Produit("dell ",5600);
$dell->afficher();
$dell->verifierStock();

$sony=new Produit("Sony vaio",3000,1000);
$sony->afficher();


?>