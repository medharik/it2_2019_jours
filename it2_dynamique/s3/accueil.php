<?php 

//var_dump($_GET);
$libelle=$_GET["libelle"];
$prix = $_GET["prix"] ;
$src="images/dell.jpg";
//echo gettype($age);
// var_dump($age);
if ($libelle=="hp") {
  $src="images/hp.jpg";
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
<br>

<img src="<?php echo $src?>" alt="">
<h2><?php echo $libelle; ?></h2>
<h3><?php echo $prix;?></h3>    
</body>
</html>