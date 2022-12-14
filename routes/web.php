<?php

use App\Models\z;
use App\Http\Controllers\Carbon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SubProductsController;
use App\Http\Controllers\Frontend\IndexController;


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

/*********************STAFF*************************************/

/*********************MANAGE PRODUCT***************/

//Staff Add Product 
Route::post('/products/add', [ProductsController::class,'AddProducts'])->name('addProducts');
Route::get('/staff/products/allLatest', [ProductsController::class,'ViewProduct'])->name('ViewProduct');
Route::get('/products/edit/{id}', [ProductsController::class,'EditProduct'])->name('editProduct');
Route::post('/products/update/{id}', [ProductsController::class,'UpdateProduct'])->name('updateProduct');
Route::get('/products/delete/{id}', [ProductsController::class,'DeleteProduct']);

Route::get('/staff/products/test', [ProductsController::class,'ViewTestProduct'])->name('ViewTestProduct');


/*********************MANAGE SUB PRODUCT***************/

Route::get('/staff/sub/allLatest', [SubProductsController::class,'ViewSubProduct'])->name('ViewSubProduct');
Route::post('/sub/add', [SubProductsController::class,'AddSubProducts'])->name('addSubProducts');
Route::get('/sub/edit/{id}', [SubProductsController::class,'EditSubProduct'])->name('editSubProduct');
Route::post('/sub/update/{id}', [SubProductsController::class,'UpdateSubProduct'])->name('updateSubProduct');
Route::get('/sub/delete/{id}', [SubProductsController::class,'DeleteSubProduct']);


/*********************MANAGE ORDER***************/

Route::get('/staff/order', [OrderController::class,'ViewOrder'])->name('viewOrder');



/*********************CUSTOMERS*************************************/

/*********************SUB PRODUCT***************/

Route::get('/', [IndexController::class,'index']);
Route::get('/products/viewsubproduct/{id}', [IndexController::class,'ViewCustSubProduct'])->name('viewCustSubProduct');
Route::get('/products/subproductsDetails/{id}', [IndexController::class,'CustViewSubProductsDetails'])->name('custViewSubProductDetails');


/*********************ADD TO CARTT***************/

Route::get('/subproductTest', [CartController::class, 'index'])->name('subProductTest');
Route::get('viewCartTest', [CartController::class, 'viewCartTest'])->name('viewCartTest');
Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [CartController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [CartController::class, 'remove'])->name('remove_from_cart');

Route::get('/products/subproducts/checkout', [CartController::class,'CustCheckout'])->name('custCheckout');

/*********************ORDER***************/

Route::post('/customers/order/cust_checkout', [OrderController::class,'CreateOrder'])->name('createOrder');








Route::get('/products/all', [ProductsController::class,'AllCustProduct'])->name('allproducts');


/*staff add product homepage*/
Route::get('/staff/products/all', [ProductsController::class,'AllStaffProduct'])->name('allStaffProducts');




//Add Product Controller
Route::post('/products/add', [ProductsController::class,'AddProducts'])->name('addProducts');



/*cust view all product latest*/
Route::get('/productslat', [ProductsController::class,'ViewLatestProducts'])->name('viewLatestProduct');



/*********************SUB PRODUCT***************/


/*staff add SubProduct homepage*/
Route::get('/staff/sub/all', [SubProductsController::class,'SubProductsView'])->name('viewSub');





/*********************ORDER**************/




/*cust add cart*/
Route::get('/cart', [SubProductsController::class,'ViewCart'])->name('viewCart');

/*cust checkout*/
Route::get('/checkout', [SubProductsController::class,'Checkout'])->name('checkout');

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


//user
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
   
    Route::get('/dashboard', function () {
        //$users=User::all();

         return view('frontend.index');
        
    });
    
});







//user

Route::middleware('staffs:staffs')->group(function() {
    {
        Route::get('staffs/login', [StaffController::class,'loginForm']);
        Route::post('staffs/login', [StaffController::class,'store'])->name('staffs.login');

    }
});

Route::middleware(['auth:sanctum,staffs',config('jetstream.auth_session'),'verified'])->group(function () {
   
    Route::get('/staffs/dashboard', function () {
       return view('staff.index');
            })->name('dashboard');
    
});

//staff

// Route::middleware('staffs:staffs')->group(function() {
//     {
//         Route::get('staffs/login', [StaffController::class,'loginForm']);
//         Route::post('staffs/login', [StaffController::class,'store'])->name('staffs.login');

//     }
// });

// Route::middleware(['auth:sanctum,staffs',config('jetstream.auth_session'),'verified'])->group(function () {
   
//     Route::get('/staffs/dashboard', function () {
//        return view('dashboard');
//             })->name('dashboard');
    
// });

Route::get('/user/logout', [ProductsController::class,'Logout'])->name('logout');


