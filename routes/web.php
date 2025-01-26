<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// Rotta per la home page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rotte per il catalogo (es. categorie di fiori)
Route::get('/catalog/{category}', [CatalogController::class, 'show'])->name('catalog.category');

// Rotte per la sezione "Per il cliente" (es. consegna, pagamento, reso)
Route::get('/client/delivery', [ClientController::class, 'delivery'])->name('client.delivery');
Route::get('/client/payment', [ClientController::class, 'payment'])->name('client.payment');
Route::get('/client/return', [ClientController::class, 'returnPolicy'])->name('client.return');

// Rotte per la parte amministrativa, protette da autenticazione
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [AdminProductController::class, 'index'])->name('admin.dashboard');
    Route::resource('products', AdminProductController::class);
});

// Rotta per la pagina 404
Route::fallback(function () {
    return view('errors.404');
})->name('404');

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
