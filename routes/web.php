<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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



Auth::routes();
Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('home');
Route::get('/categories', [App\Http\Controllers\FrontendController::class, 'category'])->name('cate');
Route::get('view-category/{slug}', [App\Http\Controllers\FrontendController::class, 'viewcategory']);

Route::get('new-products', [App\Http\Controllers\FrontendController::class, 'newproducts']);

Route::get('article/{arti_slug}', [App\Http\Controllers\FrontendController::class, 'viewarticle'])->name('view');

Route::get('article/{arti_slug}/{id?}', [App\Http\Controllers\FrontendController::class, 'viewarticler'])->name('re');


Route::get('/search', [App\Http\Controllers\FrontendController::class, 'search'])->name('search');






Route::post('add-to-cart', [App\Http\Controllers\CartController::class, 'addtocart']);
Route::post('add-to-cartr', [App\Http\Controllers\CartController::class, 'addtocartr']);





Route::get('senddata', [App\Http\Controllers\HomeController::class, 'send']);








 Route::group(['middleware' => ['auth','isAdmin']], function () {


    Route::get('/dashboard', [App\Http\Controllers\admin\FrontendController::class, 'index']);

    Route::get('/category', [App\Http\Controllers\admin\CategoryController::class, 'index']);
    Route::get('/add-category', [App\Http\Controllers\admin\CategoryController::class, 'add']);
    Route::post('/category', [App\Http\Controllers\admin\CategoryController::class, 'insert'])->name('categories');
    Route::get('/edit-category/{id}', [App\Http\Controllers\admin\CategoryController::class, 'edit']);
    Route::put('update-category/{id}', [App\Http\Controllers\admin\CategoryController::class, 'update']);
    Route::get('delete-category/{id}', [App\Http\Controllers\admin\CategoryController::class, 'destroy']);

    Route::get('/members', [App\Http\Controllers\admin\MemberController::class, 'index'])->name('members');
    Route::get('/edit-member/{id}', [App\Http\Controllers\admin\MemberController::class, 'edit']);
    Route::put('update-member/{id}', [App\Http\Controllers\admin\MemberController::class, 'update']);
    Route::get('delete-member/{id}', [App\Http\Controllers\admin\MemberController::class, 'destroy']);


    Route::get('/article', [App\Http\Controllers\admin\ArticleController::class, 'index']);
    Route::get('/add-article', [App\Http\Controllers\admin\ArticleController::class, 'add']);
    Route::post('/article', [App\Http\Controllers\admin\ArticleController::class, 'insert'])->name('articles');
    Route::get('/edit-article/{id}', [App\Http\Controllers\admin\ArticleController::class, 'edit']);
    Route::put('update-article/{id}', [App\Http\Controllers\admin\ArticleController::class, 'update']);
    Route::get('delete-article/{id}', [App\Http\Controllers\admin\ArticleController::class, 'destroy']);


    Route::get('/demandes', [App\Http\Controllers\admin\DemandeController::class, 'index'])->name('demande');
    Route::put('receveur-accept/{id}', [App\Http\Controllers\admin\DemandeController::class, 'update']);
    Route::put('receveur-decline/{id}', [App\Http\Controllers\admin\DemandeController::class, 'deleter']);

    Route::get('orders-demandes', [App\Http\Controllers\admin\DemandeController::class, 'indexo'])->name('demandeo');
    Route::get('orders-demandes/view-order/{id}', [App\Http\Controllers\admin\DemandeController::class, 'viewo']);
    Route::put('orders-demandes-accept/{id}', [App\Http\Controllers\admin\DemandeController::class, 'updateo']);

    Route::get('points-demandes', [App\Http\Controllers\admin\DemandeController::class, 'indexp'])->name('demandep');
    Route::put('points-demandes-accept/{id}', [App\Http\Controllers\admin\DemandeController::class, 'updatep']);
    Route::put('points-demandes-decline/{id}', [App\Http\Controllers\admin\DemandeController::class, 'deletep']);


    Route::get('/receveur-management', [App\Http\Controllers\admin\SiteManagementController::class, 'receveurm'])->name('receveur-management');
    Route::put('update-receveur-link-management', [App\Http\Controllers\admin\SiteManagementController::class, 'rmupdate1']);
    Route::put('update-widthraw-options', [App\Http\Controllers\admin\SiteManagementController::class, 'rmupdate2']);



    Route::get('/paginate-options', [App\Http\Controllers\admin\SiteManagementController::class, 'paginateo'])->name('paginate-options');
    Route::put('update-paginate-options', [App\Http\Controllers\admin\SiteManagementController::class, 'poupdate']);


    Route::get('/images-options', [App\Http\Controllers\admin\SiteManagementController::class, 'imageso'])->name('images-options');
    Route::get('/slide-add', [App\Http\Controllers\admin\SiteManagementController::class, 'slideadd']);
    Route::post('/slide-add', [App\Http\Controllers\admin\SiteManagementController::class, 'slideinsert'])->name('slide-add');
    Route::get('/slide-edit/{id}', [App\Http\Controllers\admin\SiteManagementController::class, 'slideedit']);
    Route::put('/slide-update/{id}', [App\Http\Controllers\admin\SiteManagementController::class, 'slideupdate']);
    Route::get('/slide-delete/{id}', [App\Http\Controllers\admin\SiteManagementController::class, 'slidedelete']);

    Route::post('/logo', [App\Http\Controllers\admin\SiteManagementController::class, 'logo'])->name('logo');
    Route::post('/head-logo', [App\Http\Controllers\admin\SiteManagementController::class, 'hlogo'])->name('head-logo');








 });


 Route::group(['middleware' => ['auth']], function () {


    Route::get('profile/{id}', [App\Http\Controllers\user\ProfileController::class, 'index'])->name('profile');
    Route::get('edit-profile', [App\Http\Controllers\user\ProfileController::class, 'eindex'])->name('eprofile');
    Route::put('edit-profile/{id}', [App\Http\Controllers\user\ProfileController::class, 'valid']);
    Route::get('receveur/{id}', [App\Http\Controllers\user\ProfileController::class, 'ereceveur']);
    Route::put('receveur-demande/{id}', [App\Http\Controllers\user\ProfileController::class, 'ureceveur'])->name('receveur');


    Route::put('widthraw/{id}', [App\Http\Controllers\PointsController::class, 'widthraw'])->name('widthraw');


    Route::get('cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');

    Route::post('delete-product', [App\Http\Controllers\CartController::class, 'deleteprod']);
    Route::get('load-cart', [App\Http\Controllers\CartController::class, 'loadcart']);
    Route::get('checkout', [App\Http\Controllers\CheckoutController::class, 'index']);
    Route::put('checkout/{id}', [App\Http\Controllers\CheckoutController::class, 'valid']);
    Route::get('my-orders/{id}', [App\Http\Controllers\OrderController::class, 'index']);
    Route::get('view-order/{id}', [App\Http\Controllers\OrderController::class, 'view']);

});


