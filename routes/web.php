<?php

use App\Http\Controllers\AdminPanel\AdminController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VendorPanel\VendorController;
use App\Http\Controllers\Backend\CategoryController;
use Illuminate\Http\Client\Request as ClientRequest;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// AUNTHENTICATION
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// ROLE: ADMIN
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');


});

// ROLE: VENDOR
Route::middleware(['auth', 'role:vendor'])->group(function () {
    Route::get('vendor/dashboard', [VendorController::class, 'AgentDashboard'])->name('vendor.dashboard');
});

// Categories
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(CategoryController::class)->group(function () {
        // GET METHOD
        Route::get('/categories/all','AllCat')->name('categories.all');
        Route::get('/categories/add','AddCat')->name('categories.add');
        Route::get('/categories/edit/{id}','EditCat')->name('categories.edit');
        Route::get('/categories/delete/{id}','DeleteCat')->name('categories.delete');

        // POST METHOD
        Route::post('/categories/store','Store')->name('categories.store');
        Route::post('/categories/update','Update')->name('categories.update');
        Route::post('/categories/destroy','Destroy')->name('categories.destroy');

    });

    Route::controller(BrandController::class)->group(function () {
        // GET METHOD
        Route::get('/brand/all','AllBrand')->name('brand.all');
        Route::get('/brand/add','AddBrand')->name('brand.add');

        // POST METHOD
        Route::post('/brand/store','Store')->name('brand.store');

    });
});

