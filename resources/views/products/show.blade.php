<!-- resources/views/products/show.blade.php -->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<h1>Détails du produit</h1>

<p><strong>Nom :</strong> {{ $product->nom_produit }}</p>


<a href="{{ url('index') }}">Créer un autre produit</a>
