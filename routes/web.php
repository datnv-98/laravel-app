<?php

use App\Http\Controllers\Backend\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('products', [
    ProductsController::class,
    'index'
]);
// where validate giá trị đầu vào
Route::get('products/{productName}/{id}', [
    ProductsController::class,
    'detail'
])->where([
    'id'=> '[a-zA-Z0-9]+',
    'id' => '[0-9]+'
]);
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
Route::get('/aboutMe', function () {
    return view('about');
});
// khi muốn xác thực đường dẫn trước khi điều hướng , name là tên mk đặt thôi
Route::get('admin', [AuthController::class, 'index']) ->name('auth.admin');
Route::post('login', [AuthController::class, 'login']) ->name('auth.login');
