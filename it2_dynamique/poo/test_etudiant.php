<?php
include("etudiant.class.php");
//instancier des objets de type etudiant(classe)
$reda=new Etudiant();
$reda->nom='ZAGHLOUL';
$reda->prenom='Reda';
$reda->age=22;
$reda->nom_complet();
$reda->majorite();
$youssef=new Etudiant();
$youssef->nom='DEBAB';
$youssef->prenom='Youssef';
$youssef->age=16;
$youssef->nom_complet();
$youssef->majorite();


?>