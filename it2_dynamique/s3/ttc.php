<?php 
$libelle=$_GET['libelle'];
$prix=$_GET['prix'];
$qte=$_GET['qte'];

$ttc=$prix* $qte;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>le  ttc pour l'achat  de <?php  echo $libelle ;?> est : <?php echo $ttc ?> DHS </h3>
    
</body>
</html>