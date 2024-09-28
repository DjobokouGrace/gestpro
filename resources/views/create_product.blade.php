<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Done !</h1>
    <form action="/index" method="GET">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">nom produit</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" name="nom_produit" placeholder="">
          </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">description produit</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" name="description_produit" placeholder="">
          </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">prix produit</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" name ="prix_produit" placeholder="">
          </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">categorie id</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" name="categorie_id" placeholder="">
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
          </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>