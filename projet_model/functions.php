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
            $rp=$link->prepare("update absence 
            set date_absence = ? , nombreHeure = ? , matiere=?,
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
            $rp->execute([]);
         $resultat=   $rp->fetchALl();
         return $resultat;
    }catch(PDOException $e){
    echo "Erreur de selection  de $table ".$e->getMessage();
    } 
    }


    function uploader($infos){
        define('MAX_SIZE',1000000);
        $autorise=['jpg','jpeg','gif','pdf'];
        $tmp=$infos['tmp_name'];
        $nom_original=$infos['name'];
        $new_nom=  md5(date('Ymdhis')."_".rand(0,99999)).$nom_original;
        // $size=$infos['size'];// en octect
         $size=filesize($tmp);// en octect
         $path_info=pathinfo($nom_original);
         $ext=$path_info['extension'];
         if($size > MAX_SIZE){
             die("fichier volumineux ");
         }
         if(!in_array($ext,$autorise)){
         die("type de fichier non autorise");
         }
        $chemin="images/$new_nom";
        move_uploaded_file($tmp,$chemin);
        //recuperer les datas
        return $chemin;
        
        
        }
        
//fin commun 
// les cookies :  donnees enregistrees par un composant web dans la machine du client
// chaque cookie a : 
//1- name 
//2- value 
//3- age : duree de vie (expire le )
// les sessions : mecanisme permettant d'entregistrer  (cote serveur )
// ( durant la visite du client , ou tant que le client n'a pas detruit la session)
//les donnees de chaque client (visiteur)

//  permettant de partager des donnees avec plusieurs pages  


// check session

function checker($login,$passe){
    try{
        $link=connecter_db();
        $rp=$link->prepare("select *  from user  where login =? and passe = ?");
        $rp->execute([$login,$passe]);
     $resultat=   $rp->fetch();
     if(!empty($resultat)){

        $_SESSION['login']=$login;
        $_SESSION['passe']=$passe;
        $_SESSION['nom']=$resultat['nom'];
        }else{
            header("location:login.php?cn=no");
        }
        
}catch(PDOException $e){
echo "Erreur de selection  de $table ".$e->getMessage();
} 



}



//session
// recherche 

function rechercher($mot_cle){

    try{
        $link=connecter_db();
        $rp=$link->prepare("select *  from etudiant  , classe 
         where  etudiant.classe_id=classe.id  and 
         (nomprenom like ?  or nom like ?) ");
        $rp->execute(["%$mot_cle%","%$mot_cle%"]);
     $resultat=   $rp->fetchAll();
     return $resultat;
}catch(PDOException $e){
echo "Erreur de recherche ".$e->getMessage();
} 


}
function rechercher_multi_critere($nom_prenom,$matiere, $classe_id){

    try{
        $link=connecter_db();

        if(!empty($classe_id)){

            $rp=$link->prepare("select * from absence a  join etudiant e on  a.etudiant_id=e.id where e.nomprenom like ? and  a.matiere  like ? 
            and e.classe_id = ? 
            
            ");
            $rp->execute(["%$nom_prenom%","%$matiere%",$classe_id]);
        }else{
            $rp=$link->prepare("select * from absence a  join etudiant e on  a.etudiant_id=e.id where e.nomprenom like ? and  a.matiere  like ? 
            
            
            ");
            $rp->execute(["%$nom_prenom%","%$matiere%"]);  
        }
     $resultat=   $rp->fetchAll();
     return $resultat;
}catch(PDOException $e){
echo "Erreur de recherche ".$e->getMessage();
} 


}

// fin recherche 

//cumul
function cumul_absence($etudiant_id){

    try{
    $link=connecter_db();
    $rp=$link->prepare("select sum(nombreHeure) as cumul  from absence  where etudiant_id =?");
    $rp->execute([$etudiant_id]);
 $resultat=   $rp->fetch(PDO::FETCH_ASSOC);
 return $resultat;
}catch(PDOException $e){
echo "Erreur de cumul  de $table ".$e->getMessage();
} 

}

//fin cumul
?>
