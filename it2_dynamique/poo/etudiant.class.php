<?php 
class Etudiant{
 //attributs (data)
public $nom;
public $prenom;
public $age ;

//methodes (functions ) : comportement

function nom_complet(){
    echo $this->nom." ".$this->prenom."<br>";
}
function majorite(){
    if($this->age > 18){
echo "Majeur<br>";
}else{
    echo "Mineur<br>";

    }
}
}



?>