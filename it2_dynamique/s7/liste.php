<?php 

//connexion bd
// connexion avec la bd
$link=mysqli_connect("localhost","root","","it2019") or die("erreur de connexion db");
// prepare une requete sql (insert)
$sql="select * from contact order by id desc";
//executer la requete
$resultat=mysqli_query($link,$sql) or die("Erreur de requete ".mysqli_error($link));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste de produit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<?php include("_menu.php");?>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom & prenom</th>
      <th scope="col">Email</th>
      <th scope="col">Mot de passe </th>
    </tr>
  </thead>
  <tbody>
  <?php while($ligne=mysqli_fetch_assoc($resultat)) { 
      
    //  var_dump($ligne);
      ?>
    <tr>
      <th scope="row"><?=$ligne['id']?></th>
      <td><?=$ligne['np']?></td>
      <td><?=$ligne['email']?></td>
      <td><?=$ligne['passe']?></td>
    </tr>

  <?php } ?>
   
  </tbody>
</table>
    
</body>
</html>