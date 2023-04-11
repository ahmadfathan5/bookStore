<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MassageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OtentikasiController;
use App\Http\Controllers\UsersController;
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

// Route::get('/massage/reply', function () {
//     return view('/form/massageForm');
// })->middleware('auth');
Route::get('/about', function () {
    return view('about');
})->middleware('auth');

Route::get('login', [OtentikasiController::class, 'index'])->name('login');
Route::post('login ', [OtentikasiController::class, 'otentikasi']);
Route::get('register', [OtentikasiController::class, 'register']);
Route::post('register', [OtentikasiController::class, 'registerProses']);

Route::middleware('auth')->group(function () {
    Route::get('logout', [OtentikasiController::class, 'logout']);
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('Only_Admin');
    Route::get('/profile', [UsersController::class, 'profile']);

    Route::get('/cart/{id}', [OrderController::class, 'index']);
    Route::post('/order', [OrderController::class, 'store']);
    Route::get('/payment', [OrderController::class, 'payment']);
    Route::post('/bayar', [OrderController::class, 'bayar']);
    Route::get('/pesanan', [OrderController::class, 'show']);

    Route::post('/search', [BooksController::class, 'search']);

    Route::get('/book', [BooksController::class, 'index'])->middleware('Only_Admin');
    Route::get('/book/create', [BooksController::class, 'create'])->middleware('Only_Admin');
    Route::get('/book/edit/{id}', [BooksController::class, 'edit'])->middleware('Only_Admin');
    Route::post('/books', [BooksController::class, 'store'])->middleware('Only_Admin');
    Route::post('/books/{id}', [BooksController::class, 'destroy'])->middleware('Only_Admin');
    Route::put('/books/{id}', [BooksController::class, 'update'])->middleware('Only_Admin');

    Route::get('/genre', [CategoriesController::class, 'index'])->middleware('Only_Admin');
    Route::get('/genre/create', [CategoriesController::class, 'create'])->middleware('Only_Admin');
    Route::get('/genre/edit/{id}', [CategoriesController::class, 'edit'])->middleware('Only_Admin');
    Route::post('/genres', [CategoriesController::class, 'store'])->middleware('Only_Admin');
    Route::post('/genres/{id}', [CategoriesController::class, 'destroy'])->middleware('Only_Admin');
    Route::put('/genres/{id}', [CategoriesController::class, 'update'])->middleware('Only_Admin');

    Route::get('/user', [UsersController::class, 'index'])->middleware('Only_Admin');
    Route::get('/user/edit/{id}', [UsersController::class, 'edit'])->middleware('Only_Admin');
    Route::put('/userEdit/{id}', [UsersController::class, 'update'])->middleware('Only_Admin');
    Route::post('/userdelete/{id}', [UsersController::class, 'destroy'])->middleware('Only_Admin');

    Route::get('/massage', [MassageController::class, 'index']);
    Route::get('/massage/reply/{id}', [MassageController::class, 'edit'])->middleware('Only_Admin');
    Route::put('/massages/{id}', [MassageController::class, 'update'])->middleware('Only_Admin');
    Route::post('/massages/{id}', [MassageController::class, 'destroy'])->middleware('Only_Admin');

    Route::get('/makeMassage/{id}', [UsersController::class, 'makeMessage']);
    Route::post('/sendMassage', [UsersController::class, 'sendMessage']);

    Route::get('/', [DashboardController::class, 'home']);

});
