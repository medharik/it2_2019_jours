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
$stock=[$hp,$dell];
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
<table class="table table-stripped">
    <tr>
        <td>Libelle</td>
        <td>prix</td>
        <td>image</td>
    </tr>

    <tr>
        <td><?=$stock[0]['libelle'] ?></td>
        <td><?=$stock[0]['prix'] ?></td>
        <td><?=$stock[0]['image'] ?></td>
    </tr>
    <tr>
        <td><?=$stock[1]['libelle'] ?></td>
        <td><?=$stock[1]['prix'] ?></td>
        <td><?=$stock[1]['image'] ?></td>
    </tr>
</table>
    
</body>
</html>