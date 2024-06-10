<?php
use App\Http\Controllers\FoodController;
use App\Http\Controllers\NutrientIntakeController;
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
Route::get('dashboard', function () {
    return view('dashboard');
});
Route::get('/food', [FoodController::class, 'index']);
Route::get('/food/tambah', [FoodController::class, 'create']);
Route::post('/food/store', [FoodController::class, 'store']);
Route::get('/food/edit/{id}', [FoodController::class, 'edit']);
Route::put('/food/update/{id}', [FoodController::class, 'update']);
Route::get('/food/hapus/{id}', [FoodController::class, 'delete']);
Route::get('/food/destroy/{id}', [FoodController::class, 'destroy']);

Route::get('/Nutrient', [NutrientIntakeController::class, 'index']);
Route::get('/Nutrient/tambah', [NutrientIntakeController::class, 'create']);
Route::post('/Nutrient/store', [NutrientIntakeController::class, 'store']);
Route::get('/Nutrient/edit/{id}', [NutrientIntakeController::class, 'edit']);
Route::put('/Nutrient/update/{id}', [NutrientIntakeController::class, 'update']);
Route::get('/Nutrient/hapus/{id}', [NutrientIntakeController::class, 'delete']);
Route::get('/Nutrient/destroy/{id}', [NutrientIntakeController::class, 'destroy']);
Route::get('/Nutrient/cetak', [NutrientIntakeController::class, 'cetak'])->name('cetak');
