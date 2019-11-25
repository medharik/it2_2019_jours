<?php 
//variables 
$prenom=" ALI";
$age=19;

if ($age > 18) {
    $maj="Majeur";
    $chemin="images/dir.jpg";
    $classe="n";
    
} else {
    $maj="Mineur";
    $chemin="images/imc.jpg";
    $classe="b";
}

?>
<!DOCTY PE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php  intro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="<?php echo $classe;?>">

<h2>Bienvenue  <?php echo $prenom; ?>  </h2>
    <h3>tu as <?php echo $age ;?> ans </h3>
    <p>
    tu es <?php  echo $maj;?>
    </p>
    <hr>
    <img src="<?php echo $chemin?>" alt="">

</body>
</html>