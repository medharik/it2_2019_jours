<?php 
include("fonctions.php");


$id=$_GET['id'];

$ligne=consulter($id);
if(empty($ligne)){
    header("location:index.php?s=no_prod");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Noouveau produit </title>
</head>
<body>
<?php include ("_menu.php");?>

<form action="update.php" method="post" >
<input type="text" name="libelle" placeholder="Entrer le libelle" value="<?=$ligne['libelle']?>">
<input type="text" name="prix" placeholder="prix" value="<?=$ligne['prix']?>">
<input type="text" name="qte" placeholder="qte en stock" value="<?=$ligne['quantite']?>">
<input type="hidden" name="id" value="<?=$ligne['id']?>">
<button stype="submit">Modifier</button>
</form>

    

</body>
</html>