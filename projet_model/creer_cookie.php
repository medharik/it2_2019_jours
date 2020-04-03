<?php 

if(!isset($_COOKIE['date_visite']))
setcookie("date_visite",date('d-m-Y'),time()+100);


?>