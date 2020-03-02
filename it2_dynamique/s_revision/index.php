<?php 

$link=mysqli_connect("localhost","root","","dbrevision2021");
//prepare requete sql
$requete=sprintf("select * from produit order by libelle asc ");
//$requete="insert into produit(libelle,prix,qtestock)  values ('$libelle',$prix,$qtestock)";
//execute
$resultat=mysqli_query($link,$requete);
$nombreLigne=mysqli_num_rows($resultat);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>liste des produits </title>
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<?php include("menu.php");?>
<div class="container">
<h4 class="text-center">Liste des  <?=$nombreLigne;?> produits </h4>
<table class="table table-striped" id="nasser">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">libelle</th>
      <th scope="col">prix</th>
      <th scope="col">qte</th>
    </tr>
  </thead>
  <tbody>

  <?php while($ligne=mysqli_fetch_assoc($resultat)){ ?>
    <tr>
      <th scope="row"><?php echo $ligne['id']?></th>
      <td><?php echo $ligne['libelle']?></td>
      <td><?php echo $ligne['prix']?></td>
      <td><?php echo $ligne['qtestock']?></td>
    </tr>

  <?php } ?>
  
  </tbody>
</table>

</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>

$(document).ready( function () {
    $('#nasser').DataTable();
} );</script>
</body>
</html>