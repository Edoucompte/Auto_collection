<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\VoitureController;
use App\Models\Categorie;
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
    return view('welcome');
});


//categorie
//create categorie
//Route::post('/categorie/create', function FunctionName() : Returntype {});
//get categories
//get a category
//update categorie
//delete categorie

Route::resources([
    'categories' => CategorieController::class,
    'voitures' => VoitureController::class
]);



//voiture
//create voiture
//get voiture
//get a voiture
//update voiture
//delete voiture