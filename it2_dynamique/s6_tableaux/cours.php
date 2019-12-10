<?php 
$hp=[   
     "libelle"=>"hp dv 6",
     "prix"=> 5600,
     "image" => "hp.jpg"
] ;
$dell=[   
     "libelle"=>"dell  satelitte",
     "prix"=> 6000,
     "image" => "dell.jpg"
] ;
$sony=[   
     "libelle"=>"sony vaio",
     "prix"=> 6000,
     "image" => "test.jpg"
] ;
$stock=[0=>$hp,1=>$dell];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h2 align="center">Listes des <?=count($stock);?> produits</h2>
<table class="table table-dark mt-3">
    <tr>
        <td>Libelle</td>
        <td>prix</td>
        <td>image</td>
    </tr>
<?php foreach($stock as $c => $v) { ?>

    <tr>
    <td><?=$c?></td>
        <td><?=$v['libelle'] ?></td>
        <td><?=$v['prix'] ?></td>
        <td><img src="images/<?=$v['image'] ?>" alt="" width="150"></td>
    </tr>
<?php } ?> 
</table></div>
    
</body>
</html>