<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;

// Rotta per la home page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rotte per il catalogo (es. categorie di fiori)
Route::get('/catalog/{category}', [CatalogController::class, 'show'])->name('catalog.category');

// Rotte per la sezione "Per il cliente" (es. consegna, pagamento, reso)
Route::get('/client/delivery', [ClientController::class, 'delivery'])->name('client.delivery');
Route::get('/client/payment', [ClientController::class, 'payment'])->name('client.payment');
Route::get('/client/return', [ClientController::class, 'returnPolicy'])->name('client.return');

// Rotte per la parte amministrativa
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/products', [AdminController::class, 'products'])->name('admin.products');
    Route::post('/products/add', [AdminController::class, 'addProduct'])->name('admin.products.add');
    Route::delete('/products/delete/{id}', [AdminController::class, 'deleteProduct'])->name('admin.products.delete');
});

// Rotta per la pagina 404
Route::fallback(function () {
    return view('errors.404');
})->name('404');
