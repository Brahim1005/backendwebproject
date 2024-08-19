<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactformController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\FaqAdminController;
use App\Http\Controllers\Admin\FaqCategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ContactFormAdminController;

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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// ====================== HOMECONTROLLER ROUTES ======================


route::get('/homeadmin', [HomeController::class, 'homeadmin']);

route::get('/', [HomeController::class, 'home']);

route::get('/search', [HomeController::class, 'search']);

route::post('/addcart/{id}', [HomeController::class, 'addcart']);

route::get('/showcart', [HomeController::class, 'showcart']);

route::get('/delete/{id}', [HomeController::class, 'deletecart']);

route::post('/order', [HomeController::class, 'confirmorder']);

route::get('/about', [HomeController::class, 'about']);


// ====================== ADMIN ORDERCONTROLLER ROUTES ======================


route::get('/showorder', [OrderController::class, 'showorder']);

route::get('/updatestatus/{id}', [OrderController::class, 'updatestatus']);

// ====================== ADMIN PRODUCTCONTROLLER ROUTES ======================

route::get('/product', [ProductController::class, 'product']);

route::post('/uploadproduct', [ProductController::class, 'uploadproduct']);

route::get('/showproduct', [ProductController::class, 'showproduct']);

route::get('/deleteproduct/{id}', [ProductController::class, 'deleteproduct']);

route::get('/updateproductview/{id}', [ProductController::class, 'updateproductview']);

route::post('/updateproduct/{id}', [ProductController::class, 'updateproduct']);

// ====================== ADMIN FAQCONTROLLER ROUTES ======================

route::get('/showfaq', [FaqAdminController::class, 'showfaq']);

route::get('/createfaqview', [FaqAdminController::class, 'createfaqview']);

route::post('/storefaq', [FaqAdminController::class, 'storefaq']);

route::get('/updatefaqview/{id}', [FaqAdminController::class, 'updatefaqview']);

route::post('/updatefaq/{id}', [FaqAdminController::class, 'updatefaq']);

route::get('/deletefaq/{id}', [FaqAdminController::class, 'deletefaq']);

// ====================== ADMIN FAQCATEGORYCONTROLLER ROUTES ======================

Route::get('/faqCategory', [FaqCategoryController::class, 'showFaqCategories'])->middleware('auth');

Route::post('/storeFaqCategory', [FaqCategoryController::class, 'storeFaqCategory'])->middleware('auth');

Route::post('/updateFaqCategory/{id}', [FaqCategoryController::class, 'updateFaqCategory'])->middleware('auth');

Route::get('/updatefaqcategoryview/{id}', [FaqCategoryController::class, 'updatefaqcategoryview'])->name('updatefaqcategoryview');

Route::get('/deleteFaqCategory/{id}', [FaqCategoryController::class, 'deleteFaqCategory'])->middleware('auth');

// ====================== ADMIN USERCONTROLLER ROUTES ======================

Route::get('/manageUsers', [UserController::class, 'manageUsers'])->middleware('auth');

Route::get('/promoteUser/{id}', [UserController::class, 'promoteUser'])->middleware('auth');

Route::get('/deleteUser/{id}', [UserController::class, 'deleteUser'])->middleware('auth');

Route::post('/createUser', [UserController::class, 'createUser'])->middleware('auth');

// ====================== ADMIN CONTACTFORMCONTROLLER ROUTES ======================

route::get('/showcontactform', [ContactFormAdminController::class, 'showcontactform']);

route::get('/deletecontactform/{id}', [ContactFormAdminController::class, 'deletecontactform']);

// ====================== CONTACTFORMCONTROLLER ROUTES ======================

route::get('/contactform', [ContactformController::class, 'index'])->name('contactform.index');

route::post('/contactform', [ContactformController::class, 'store'])->name('contactform.store');

// ====================== FAQCONTROLLER ROUTES ======================

route::get('/faq', [FaqController::class, 'index'])->name('faq.index');

route::post('/faq', [FaqController::class, 'store'])->name('faq.store');

route::get('/faq', [FaqController::class, 'showfaq']);

// ====================== USER PROFILES ROUTES ======================

Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');

// ====================== USER SEARCH ROUTE ======================

Route::get('/user/search', [ProfileController::class, 'search'])->name('user.search');


