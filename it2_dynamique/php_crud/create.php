<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Nouveau produit</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <?php include ("_menu.php") ?>
    <div class="container row">
      <div class="col-md-6 mx-auto shadow p-2 mt-2">
        <div class="alert alert-info">Nouveau produit</div>
        <form action="store.php" method="post">
          <div class="form-group">
            <label for="libelle">libelle</label>
            <input
              type="text"
              class="form-control"
              id="libelle"
              name="libelle"
              required
            />
          </div>
          <div class="form-group">
            <label for="cout">cout</label>
            <input type="number" class="form-control" id="cout" name="cout" />
          </div>
          <div class="form-group">
            <label for="prix">prix</label>
            <input
              required
              type="number"
              class="form-control"
              id="prix"
              name="prix"
            />
          </div>
          <div class="form-group">
            <label for="qtestock">quantite en stock</label>
            <input
              type="text"
              class="form-control"
              id="qtestock"
              name="qtestock"
              value="0"
            />
          </div>
          <button class="btn btn-primary btn-block">Ajouter</button>
        </form>
      </div>
    </div>
  </body>
</html>
