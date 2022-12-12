<?php

use App\Models\z;
use App\Http\Controllers\Carbon;
use Illuminate\Support\Facades\Route;
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
Route::post('/products/update/{id}', [ProductsController::class,'UpdateProduct']);
Route::get('/products/delete/{id}', [ProductsController::class,'DeleteProduct']);


/*********************MANAGE SUB PRODUCT***************/

Route::get('/staff/sub/allLatest', [SubProductsController::class,'ViewSubProduct'])->name('ViewSubProduct');
Route::post('/sub/add', [SubProductsController::class,'AddSubProducts'])->name('addSubProducts');
Route::get('/sub/edit/{id}', [SubProductsController::class,'EditSubProduct'])->name('editSubProduct');
Route::post('/sub/update/{id}', [SubProductsController::class,'UpdateSubProduct'])->name('updateSubProduct');
Route::get('/sub/delete/{id}', [SubProductsController::class,'DeleteSubProduct']);






/*********************CUSTOMERS*************************************/

/*********************SUB PRODUCT***************/

Route::get('/', [IndexController::class,'index']);
Route::get('/products/viewsubproduct/{id}', [IndexController::class,'ViewCustSubProduct'])->name('viewCustSubProduct');
Route::get('/products/subproductsDetails/{id}', [IndexController::class,'CustViewSubProductsDetails'])->name('custViewSubProductDetails');


/*********************ADD TO CARTT***************/
Route::get('/products/subproducts/cart/', [IndexController::class,'CustCart'])->name('custCart');






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


/*cust create order*/
Route::get('/products/subproducts/order', [SubProductsController::class,'CreateOrder'])->name('createOrder');

/*cust create order*/
Route::get('/products/subproducts/order/design', [SubProductsController::class,'DesignOrder'])->name('designOrder');


/*staff view order*/
Route::get('/staff/order', [SubProductsController::class,'ViewStaffOrder'])->name('viewStaffOrder');


/*staff choose order*/
Route::get('/chooseorder', [SubProductsController::class,'ViewOrder'])->name('viewOrder');


/*staff delete order*/
Route::get('/deleteOrder', [SubProductsController::class,'StaffDeleteOrder'])->name('staffDeleteOrder');

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


