<?php 
session_start();
var_dump($_SESSION);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h4>Bienvenue : <?=$_SESSION['nom']?></h4>
<h5h4>Date de visite est  : <?=$_SESSION['date_acces']?></h5>
    
</body>
</html>