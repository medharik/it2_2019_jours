<?php 
include("fonctions.php");
$message="";
if(isset($_GET['s'])){

                    $s=$_GET['s'];
                    if($s=="yes"){
                        $message="suppression effectuee avec succes";
                    }  
                    if($s=="ajout"){
                        $message="Ajout du produit effectue avec succes";
                    }  

}

$resultat= tous();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include ("_menu.php");?>
<h4><?=$message;?></h4>
<table>
<thead>
  <tr>
        <td>id</td>
        <td>Libelle</td>
        <td>Prix</td>
        <td>Qte en stock</td>
        <td>Actions</td>
    </tr>
</thead>
  <tbody>
<?php  while($ligne=mysqli_fetch_assoc($resultat)) {?>  
  <tr>
        <td><?=$ligne['id'];?></td>
        <td><?=$ligne['libelle'];?></td>
        <td><?=$ligne['prix'];?></td>
        <td><?=$ligne['quantite'];?></td>
        <td><a href="delete.php?id=<?=$ligne['id'];?>" onclick="return confirm('supprimer ?')">Supprimer</a>
        <a href="">M</a>
        <a href="">C</a></td>
    </tr>
<?php } ?>
  </tbody>
   </table>


</body>
</html>