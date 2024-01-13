<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactformController;
use App\Http\Controllers\FaqController;

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


// ====================== ADMINCONTROLLER ROUTES ======================


route::get('/showorder', [AdminController::class, 'showorder']);

route::get('/updatestatus/{id}', [AdminController::class, 'updatestatus']);

route::get('/product', [AdminController::class, 'product']);

route::post('/uploadproduct', [AdminController::class, 'uploadproduct']);

route::get('/showproduct', [AdminController::class, 'showproduct']);

route::get('/deleteproduct/{id}', [AdminController::class, 'deleteproduct']);

route::get('/updateproductview/{id}', [AdminController::class, 'updateproductview']);

route::post('/updateproduct/{id}', [AdminController::class, 'updateproduct']);

route::get('/showcontactform', [AdminController::class, 'showcontactform']);

route::get('/deletecontactform/{id}', [AdminController::class, 'deletecontactform']);

route::get('/showfaq', [AdminController::class, 'showfaq']);

route::get('/updatefaqview/{id}', [AdminController::class, 'updatefaqview']);

route::post('/updatefaq/{id}', [AdminController::class, 'updatefaq']);

route::get('/deletefaq/{id}', [AdminController::class, 'deletefaq']);


// ====================== CONTACTFORMCONTROLLER ROUTES ======================


route::get('/contactform', [ContactformController::class, 'index'])->name('contactform.index');

route::post('/contactform', [ContactformController::class, 'store'])->name('contactform.store');


// ====================== FAQCONTROLLER ROUTES ======================

route::get('/faq', [FaqController::class, 'index'])->name('faq.index');

route::post('/faq', [FaqController::class, 'store'])->name('faq.store');

route::get('/faq', [FaqController::class, 'showfaq']);



