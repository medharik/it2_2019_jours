<?php 
$nom=$_GET['nom'];
$age=$_GET['age'];
$maj="Mineur";
if ($age>18) {
  $maj="Majeur";
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
    <h3>
    Bienvenue <?php echo $nom?>
    </h3>

<h3>
Vous etes <?php  echo $maj; ?>
</h3>

</body>
</html>