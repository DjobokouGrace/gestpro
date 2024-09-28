<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, product!</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nomProduit" class="form-label">Nom du produit</label>
            <input type="text" class="form-control" id="nomProduit" name="nom_produit" placeholder="Entrez le nom du produit" required>
        </div>
    
        <div class="mb-3">
            <label for="descriptionProduit" class="form-label">Description du produit</label>
            <input type="text" class="form-control" id="descriptionProduit" name="description_produit" placeholder="Entrez la description" required>
        </div>
    
        <div class="mb-3">
            <label for="prixProduit" class="form-label">Prix du produit</label>
            <input type="number" step="0.01" class="form-control" id="prixProduit" name="prix_produit" placeholder="Entrez le prix du produit" required>
        </div>
    
        <div class="mb-3">
            <label for="categorieId" class="form-label">Catégorie ID</label>
            <input type="number" class="form-control" id="categorieId" name="categorie_id" placeholder="Entrez l'ID de la catégorie" required>
        </div>
    
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Enregistrer le produit</button>
        </div>
    </form>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>