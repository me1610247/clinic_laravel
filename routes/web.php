<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
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
// regular controller
Route::get('/home',[HomeController::class,'index'])->name('home.index');
Route::get('/contact',[HomeController::class,'contact'])->name('home.contact');
// single action controller
Route::get('/about',AboutController::class)->name('home.about');
//route resoucres
Route::resource('products',ProductController::class);
Route::get('/dbconn',function(){
    return view('dbconn');
});
Route::prefix('demo')->group(function(){
    Route::get('name-route',function(){
        return redirect()->route('products.show',1);
    });
    Route::get('download',function(){
        return response()->download(public_path('download.png'));
    });
    
  Route::get('product',function(){
    request()->whenHas('limit', function ($value) {
        dd("Value of 'limit': " . $value);
    });
    })->middleware('auth');
});
Route::get('/test',function(){
   $products=new Product();
   $products->title="Product 4 title";
   $products->description="Product 4 Desc";
});

Route::resource('/products',ProductController::class);


Route::resource('/categories',CategoryController::class);