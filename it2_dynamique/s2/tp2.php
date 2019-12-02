
<?php 
//recuperer les infos depuis le liens (url)  
$libelle=$_GET["libelle"];
$prix=$_GET["prix"];
if($libelle=="hp")
  $src="images/index.jpg";
else {
    $src="images/pc1.jpg";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tp 2 en php</title>
</head>
<body>
<h4>Le produit <?php echo $libelle; ?> coute <?php echo $prix;?> DHS</h4>    
<img src="<?php echo  $src;?>"  alt="">
</body>
</html>