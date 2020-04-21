<?php 
// POO : programmation orientée objet

//une application concu en Poo
//se compose de plusieurs objets en communication 
//chaque objet possede ses propres attributs et methodes

//exemple : Produit(libelle,prix )+ methodes (ajouter() , supprimer(),....)
//facture(numero, date)+ methodes (fonctions, operations, comportement) : imprimer , ajouter un produit ,....

// notions de base :
//classe : modeles , type : Produit , Facture

//objet :$hp , $dell, $facture1 , $facture2
//un objet est une instance d'une classe 

class Produit {
    //attributs 
public $libelle;
public $prix;
public $qteStock;
//les construteurs : methodes (functions
//) permettant d'initialiser les attributs
// lors de la creation (instaciation ) de l'objet
// creation du  constrcuteur 
function __construct($libelle="",$prix=0,$qte=0){
$this->libelle=$libelle;
$this->prix=$prix;
$this->qteStock=$qte;


}

// methodes (function)

function afficher(){
 echo $this->libelle ." coute ".$this->prix."$<br>";
}

function verifierStock(){

    if($this->qteStock > 0) echo "En stock<br>";
    else echo "En rupture de stock<br>";

}




}





?>