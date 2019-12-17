<?php 
$hp=[   
     "libelle"=>"hp dv 6",
     "prix"=> 5600,
     "image" => "hp.jpg",
     'qte'=>10
] ;
$dell=[   
     "libelle"=>"dell  satelitte",
     "prix"=> 6000,
     "image" => "dell.jpg",
     'qte'=>0
] ;
$sony=[   
     "libelle"=>"sony vaio",
     "prix"=> 6000,
     "image" => "testgit .jpg",
     'qte'=>190
] ;
$stock=[0=>$hp,1=>$dell,$sony];
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
        <td>Etat de stock</td>
    </tr>
<?php foreach($stock as $c => $v) { ?>

    <tr class=" <?php 
        if($v['qte']==0){
            echo "bg-danger";
        }
        ?>">
    <td><?=$c?></td>
        <td><?=$v['libelle'] ?></td>
        <td><?=$v['prix'] ?></td>
        <td><img src="images/<?=$v['image'] ?>" alt="" width="150"></td>
        <td>
        <?php 
        if($v['qte']==0){
            echo "en rupture de stock";
        }else{
            echo $v['qte'];
        }
        
        
        ?></td>
    </tr>
<?php } ?> 
</table>
</div>
    
</body>
</html>