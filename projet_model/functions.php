<?php 
function connecter_db(){
$options=[    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$link=new PDO("mysql:host=localhost;dbname=dbabsence","root","",$options);
return $link;
}
//classe 
function ajouter_classe($nom){
try{
        $link=connecter_db();
        $rp=$link->prepare("insert into classe (nom) values (?)");
        $rp->execute([$nom]);
}catch(PDOException $e){
echo "Erreur d'ajout de classe ".$e->getMessage();
}
    
}
function modifier_classe($nom,$id){
try{
        $link=connecter_db();
        $rp=$link->prepare("update classe set nom = ? where id=?");
        $rp->execute([$nom,$id]);
}catch(PDOException $e){
echo "Erreur de modification  de classe ".$e->getMessage();
}
    
}

//fin classe
//etudiant 
function ajouter_etudiant($nomprenom ,$image,$classe_id){
    try{
            $link=connecter_db();
            $rp=$link->prepare("insert into etudiant (nomprenom,photo,classe_id ) values (?,?,?)");
            $rp->execute([$nomprenom,$image,$classe_id]);
    }catch(PDOException $e){
    echo "Erreur d'ajout de etudiant ".$e->getMessage();
    }
        
    }
    function modifier_etudiant($nomprenom,$image,$classe_id,$id){
    try{
            $link=connecter_db();
            $rp=$link->prepare("update etudiant set nomprenom = ? , image = ? , classe_id=? where id=?");
            $rp->execute([$nomprenom,$image,$classe_id,$id]);
    }catch(PDOException $e){
    echo "Erreur de modification  de etudiant ".$e->getMessage();
    }
        
    }
    
    //fin etudiant
//etudiant 
function ajouter_absence($date_absence ,$nombre_heure,$matiere,$etudiant_id){
    try{
            $link=connecter_db();
            $rp=$link->prepare("insert into absence (date_absence ,nombreHeure,matiere,etudiant_id) values (?,?,?,?)");
            $rp->execute([$date_absence ,$nombre_heure,$matiere,$etudiant_id]);
    }catch(PDOException $e){
    echo "Erreur d'ajout de l'ansence ".$e->getMessage();
    }
        
    }
    function modifier_absence($date_absence,$nombre_heure,$matiere,$etudiant_id,$id){
    try{
            $link=connecter_db();
            $rp=$link->prepare("update etudiant set date_absence = ? , nombre_heure = ? , matiere=?
            etudiant_id=? where id=?");
            $rp->execute([$date_absence ,$nombre_heure,$matiere,$etudiant_id,$id]);
    }catch(PDOException $e){
    echo "Erreur de modification  de l'absence ".$e->getMessage();
    }
        
    }
    
    //fin etudiant


//commun
//suppression selon un id et une table 
function supprimer($id,$table){
    try{
            $link=connecter_db();
            $rp=$link->prepare("delete from $table where id=?");
            $rp->execute([$id]);
    }catch(PDOException $e){
    echo "Erreur de modification  de $table ".$e->getMessage();
    }
        
    }
    // get all   
    function all($table){
        try{
            $link=connecter_db();
            $rp=$link->prepare("select *  from $table ");
            $rp->execute();
         $resultat=   $rp->fetchAll();
         return $resultat;
    }catch(PDOException $e){
    echo "Erreur de selection  de $table ".$e->getMessage();
    } 
    }
    // get by id 
    function find($id,$table){
        try{
            $link=connecter_db();
            $rp=$link->prepare("select *  from $table  where id =?");
            $rp->execute([$id]);
         $resultat=   $rp->fetch();
         return $resultat;
    }catch(PDOException $e){
    echo "Erreur de selection  de $table ".$e->getMessage();
    } 
    }
    // get by condition
// findBy("classe_id=1","etudiant");
    function findBy($condition,$table){
        try{
            $link=connecter_db();
            $rp=$link->prepare("select *  from $table  where $condition ");
            $rp->execute([$id]);
         $resultat=   $rp->fetchALl();
         return $resultat;
    }catch(PDOException $e){
    echo "Erreur de selection  de $table ".$e->getMessage();
    } 
    }

//fin commun 

?>