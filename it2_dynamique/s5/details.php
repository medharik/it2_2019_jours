<?php 
//$_GET
  //   var_dump($_GET);
 if(! isset($_GET['id'])){
   header("location:catalogue.php");  
 }
 $autorise=[1,2,3];
 if( !  in_array($_GET['id'],$autorise))
 {
     echo "Produit introuvable ";
     die();
 }

$id=$_GET['id'];
$libelle="";
$prix=0;
$qte=0;

if($id==1){// dell
$libelle="dell satelitte d7";
$prix=5600;
$qte=9000;
$src="images/dell.jpg";
}
if($id==2){// hp
$libelle="hp compaq s7";
$prix=6000;
$qte=0;
$src="images/hp.jpg";

}
if($id==3){// hp
$libelle="sony compaq s7";
$prix=6000;
$qte=0;
$src="http://placehold.it/300x300";

}


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
    
<img src="<?=$src?>" alt="">
<h3>Libelle : <?=$libelle?></h3>
<h4>Prix :<?=$prix?> </h4>
<h4>Quantite en stock : <?=$qte?> </h4>
</body>
</html>