<?php 
session_start();
$_SESSION['nom']='harik';
$_SESSION['date_acces']=date('d-m-Y');
var_dump($_SESSION);

?>