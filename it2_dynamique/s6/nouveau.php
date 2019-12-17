<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 shadow mx-auto p-4 mt-4">
            
            <form action="save.php">
            
            <div class="form-group">
            <label for="libelle">Libelle : </label>
            <input type="text" class="form-control" name="libelle" id="libelle">
            </div>
            <div class="form-group">
            <label for="prix">Prix : </label>
            <input type="text" class="form-control" name="prix" id="prix">
            </div>
            <div class="form-group">
            <label for="qtestock">quantite en stock : </label>
            <input type="text" class="form-control" name="qtestock" id="qtestock">
            </div>
            <button class="btn btn-primary">Ajouter le produit</button>
            </form>

            </div>
        </div>
    </div>
</body>
</html>