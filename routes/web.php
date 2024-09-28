<?php

use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});


//Produit
Route::post('/index', [ProduitController::class, 'Createproduct']);
Route::get('/listproduct', [ProduitController::class, 'Listproduct']);
Route::delete('/deleteproduct/{prod}', [ProduitController::class, 'Deleteproduct']);
Route::put('/updateproduct/{prod}', [ProduitController::class, 'Updateproduct']);

Route::post('/products', [ProduitController::class, 'store'])->name('products.store');
Route::get('/products/{id}', [ProduitController::class, 'show'])->name('products.show');
