<?php
// connexion bd
//function : module oou sous programme traitant une tache precise
function connecter_db(){
  $link=   mysqli_connect("localhost","root","","it2019") or die("Erreur de connexion db");
  return $link;
}
//ajouter
function ajouter($libelle, $prix, $qte){
    $link=connecter_db();
    $libelle=mysqli_real_escape_string($link,$libelle);
$sql=sprintf("insert into produit (libelle,prix,quantite) values('%s',%f,%d) ",$libelle, $prix, $qte);
mysqli_query($link,$sql) or die("erreur d'ajout du produit $libelle ".mysqli_error($link));
}
//recuperer tous les produits
function tous(){
$link=connecter_db();
$sql="select * from produit";
$resultat=mysqli_query($link,$sql) or die("erreur de selection du produit ".mysqli_error($link));
return $resultat;
}

//supprimer
function supprimer($id){
    $link=connecter_db();
    $sql=sprintf("delete from produit where id =%d",$id);
    mysqli_query($link,$sql) or die("erreur de suppression du produit ".mysqli_error($link));
  
    }
//modifier
//lister