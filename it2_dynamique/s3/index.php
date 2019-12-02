<?php 
//var_dump($_GET);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>catalogue</title>
</head>
<body>

<a href="accueil.php?libelle=hp&prix=9000">
<img src="images/hp.jpg" alt="">
</a> 
<a href="accueil.php?libelle=dell&prix=7000">
<img src="images/dell.jpg" alt="">
</a>
<hr>
<form action="ttc.php">

libelle  : <input type="text" name="libelle" >
p  : <input type="text" name="prix" >
Quantite  : <input type="text" name="qte" >
<button>Valider</button>

</form>
    
</body>
</html>