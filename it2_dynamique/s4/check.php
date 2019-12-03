<?php
//recuperer les data par name
$pseudo=$_GET["pseudo"];
$email=$_GET["email"];
$passe=$_GET["passe"];
//verifier si un des variables est vide (empty)
//vide : "" , 0, false , array() ou [] , null
if (empty($pseudo) || empty($email) || empty($passe) ) {
//redirection  vers login.php
header("location:login.php?v=vide"); 
}else if(!($passe==123 && $email=="itsup@gmail.com")){
    header("location:login.php?v=no");
}else{
    header("location:accueil.php?pseudo=$pseudo");
}


?>