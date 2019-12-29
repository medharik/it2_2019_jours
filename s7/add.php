<?php 
//recuperer les data
// $np=$_POST['np'];
// $email=$_POST['email'];
// $passe=$_POST['passe'];

extract($_POST);
//connexion bd
// connexion avec la bd
$link=mysqli_connect("localhost","root","","it2019") or die("erreur de connexion db");
// prepare une requete sql (insert)
$sql="insert into contact(np,email,passe) values ('$np','$email','$passe')";
//executer la requete
mysqli_query($link,$sql) or die("Erreur de requete ".mysqli_error($link));
header("location:liste.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ajout ok</title>
</head>
<body>

<h3>Ajout ok</h3>
    
</body>
</html>