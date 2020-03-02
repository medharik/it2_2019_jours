<?php
// connexion bd
//function : module oou sous programme traitant une tache precise
function connecter_db(){
  $link=   mysqli_connect("localhost","root","","it2019") or die("Erreur de connexion db");
  return $link;
}
//ajouter
function ajouter($libelle, $prix, $qte,$chemin){
    $link=connecter_db();
    $libelle=mysqli_real_escape_string($link,$libelle);
$sql=sprintf("insert into produit (libelle,prix,quantite,chemin) values('%s',%f,%d,'%s') ",$libelle, $prix, $qte,$chemin);
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
    //consulter 
    function consulter($id){
      $link=connecter_db();
      $sql=sprintf("select * from produit  where id =%d",$id);
   $resultat=   mysqli_query($link,$sql) or die("erreur de consultation du produit ".mysqli_error($link));
    $ligne=mysqli_fetch_assoc($resultat);
    return $ligne;
    }
    //modifier
    function modifier($libelle,$prix,$qte,$id)
    {
      $link=connecter_db();
      $sql=sprintf("update produit set libelle='%s' , prix=%f , quantite=%d where  id=%d",$libelle,$prix,$qte,$id);
   mysqli_query($link,$sql) or die("erreur de modificaation du produit ".mysqli_error($link));

    }
//lister