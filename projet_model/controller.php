<?php 
include("functions.php");
extract($_POST);
extract($_GET);// a , t
//table classes
if($t=="classe"){
    //store
  if($a=="store" ){
    ajouter_classe($nom);
  }  
  if($a=="delete" ){
    supprimer($id,$t);
  }  
  if($a=="update" ){
    modifier_classe($nom,$id);
  }  
  header("location:index_classe.php");
}
//table etudiant
if($t=="etudiant"){
    //store
  if($a=="store" ){
   $chemin= uploader($_FILES['photo']);
    ajouter_etudiant($nomprenom,$chemin,$classe_id);
  }  
  if($a=="delete" ){
    supprimer($id,$t);
  }  
  if($a=="update" ){
    modifier_etudiant($nomprenom,"",$classe_id,$id);
  }  
  header("location:index_etudiant.php");
} 
//table absence
if($t=="absence"){
    //store
  if($a=="store" ){
    // var_dump($_POST);
    // die();

    foreach($etudiant_id as $id){
      ajouter_absence($date_absence,$nombreHeure,$matiere,$id);
    }
  }  
  if($a=="delete" ){
    supprimer($id,$t);
  }  
  if($a=="update" ){
    modifier_absence($date_absence,$nombreHeure,$matiere,$etudiant_id,$id);
  }  
  
  header("location:index_absence.php");
}


?>