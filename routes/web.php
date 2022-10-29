<?php

use App\Models\z;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Product Controller
Route::get('/products/all', [ProductsController::class,'AllProducts'])->name('allproducts');

//Add Product Controller
Route::post('/products/add', [ProductsController::class,'AddProducts'])->name('addProducts');

//Edit Product Controller
Route::get('/products/edit/{id}', [ProductsController::class,'EditProduct']);

//Update Product Controller
Route::post('/products/update/{id}', [ProductsController::class,'UpdateProduct']);

//Delete Product Controller
Route::get('/products/delete/{id}', [ProductsController::class,'DeleteProduct']);

//Design Controller
Route::get('/designs/all', [DesignController::class,'AllDesigns'])->name('alldesigns');

//Add Design Controller
Route::post('/designs/add', [DesignController::class,'AddDesigns'])->name('addDesigns');

//Edit Design Controller
Route::get('/designs/edit/{id}', [DesignController::class,'EditDesigns']);

//Update Design Controller
Route::post('/designs/update/{id}', [DesignController::class,'UpdateDesigns']);

//Delete Product Controller
Route::get('/designs/delete/{id}', [DesignController::class,'DeleteDesigns']);


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
   
    Route::get('/dashboard', function () {
        //$users=User::all();

        return view('staff.index');
        
    })->name('dashboard');
    
});


//customers

Route::middleware('customers:customers')->group(function() {
    {
        Route::get('customers/login', [CustomerController::class,'loginForm']);
        Route::post('customers/login', [CustomerController::class,'store'])->name('customers.login');

    }
});

Route::middleware(['auth:sanctum,customers',config('jetstream.auth_session'),'verified'])->group(function () {
   
    Route::get('/customers/dashboard', function () {
       return view('dashboard');
            })->name('dashboard');
    
});

//staff

Route::middleware('staffs:staffs')->group(function() {
    {
        Route::get('staffs/login', [StaffController::class,'loginForm']);
        Route::post('staffs/login', [StaffController::class,'store'])->name('staffs.login');

    }
});

Route::middleware(['auth:sanctum,staffs',config('jetstream.auth_session'),'verified'])->group(function () {
   
    Route::get('/staffs/dashboard', function () {
       return view('dashboard');
            })->name('dashboard');
    
});

Route::get('/user/logout', [ProductsController::class,'Logout'])->name('logout');


