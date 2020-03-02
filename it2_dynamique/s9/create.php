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

<form action="store.php" method="post"  enctype="multipart/form-data">
<input type="text" name="libelle" placeholder="Entrer le libelle">
<input type="text" name="prix" placeholder="prix">
<input type="text" name="qte" placeholder="qte en stock">
Image :<input type="file" name="chemin" id="chemin">
<button stype="submit">Ajouter</button>
</form>

    

</body>
</html>