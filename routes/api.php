<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProduitController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/home', [ApiController::class, 'Home']);

Route::post('/mine/', [ApiController::class, 'Mine']);


//protected routes
Route::group(['middleware'=>['auth:sanctum']],function(){ 
Route::get('/listcate', [CategorieController::class, 'Listcate']);
Route::post('/createcate', [CategorieController::class, 'Createcate']);

Route::post('/createprod', [ProduitController::class, 'Createprod']);


});
//ROUTES Categorie
//Route::post('/creationcategorie', [CategorieController::class, 'Createcate']);
//Route::get('/listcate', [CategorieController::class, 'Listcate']);
Route::delete('/deletecate/{cate}', [CategorieController::class, 'Deletecate']);
Route::put('/updatecate/{cate}', [CategorieController::class, 'Updatecate']);


//ROUTES Produit
//Route::post('/createprod', [ProduitController::class, 'Createprod']);
Route::get('/listprod', [ProduitController::class, 'Listprod']);
Route::delete('/deleteprod/{prod}', [ProduitController::class, 'Deleteprod']);
Route::put('/updateprod/{prod}', [ProduitController::class, 'Updateprod']);


Route::post('/createuser', [AuthController::class, 'createUser']);
Route::get('/listuser', [AuthController::class, 'listUser']);

Route::post('/auth', [AuthController::class, 'Auth']);
