<?php 
include("functions.php");
$id=$_GET['id'];
$classe=find($id,"classe");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include ("_css.php");?>

</head>
<body>
<?php include("_menu.php");?>
<div class="container">
<h3 class="text-center text-primary">Consultation de la classe :<?=$classe['nom']?> </h3>
</div>



<?php include("_footer.php");?>
<?php include ("_scripts.php");?>

    
</body>
</html>