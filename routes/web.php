<?php

use App\Models\z;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SubProductsController;
use App\Http\Controllers\Carbon;


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

/*staff view product homepage*/
Route::get('/staff/products/allLatest', [ProductsController::class,'ViewProduct'])->name('ViewProduct');

//Edit Product Controller
Route::get('/products/edit/{id}', [ProductsController::class,'EditProduct']);


//Update Product Controller
Route::post('/products/update/{id}', [ProductsController::class,'UpdateProduct']);

//Delete Product Controller
Route::get('/products/delete/{id}', [ProductsController::class,'DeleteProduct']);


/*********************MANAGE SUB PRODUCT***************/

/*staff add SubProduct homepage*/
Route::get('/staff/sub/allLatest', [SubProductsController::class,'ViewSubProduct'])->name('ViewSubProduct');

// //Add SubProduct Controller
Route::post('/sub/add', [SubProductsController::class,'AddSubProducts'])->name('addSubProducts');

// //Edit SubProduct Controller
Route::get('/sub/edit/{id}', [SubProductsController::class,'EditSubProduct'])->name('editSubProduct');

// //Update SubProduct Controller
Route::post('/sub/update/{id}', [SubProductsController::class,'UpdateSubProduct'])->name('updateSubProduct');

// //Delete SubProduct Controller
Route::get('/sub/delete/{id}', [SubProductsController::class,'DeleteSubProduct']);


/*********************CUSTOMERS*************************************/

/*********************SUB PRODUCT***************/

/*cust view SubProduct */
Route::get('/products/subproductss', [SubProductsController::class,'CustViewSubProducts'])->name('custViewSubProduct');






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



/*cust view SubProduct homepage*/
Route::get('/products/subproducts', [SubProductsController::class,'SubProductsCustView'])->name('subProductsCustView');


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

       // return view('staff.index');
         return view('frontend.index');
        
    });
    
});

//Route::get('/', [IndexController::class,'index']);






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


