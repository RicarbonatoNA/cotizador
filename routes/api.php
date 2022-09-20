<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\RolesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
    Route::get('/users', [AuthController::class, 'Read']);
    Route::delete('/DeleteUser/{id}', [AuthController::class, 'Delete']); 

    Route::group(['prefix' => 'roles'], function(){
        Route::post('/CreateRoles',[RolesController::class, 'Create']);
        Route::delete('/DeleteRoles/{id}',[RolesController::class, 'Delete']);
        Route::post('/UpdateRoles/{id}',[RolesController::class, 'Update']);
        Route::get('/ReadRoles',[RolesController::class, 'Read']);
    });

    Route::group(['prefix' => 'business'], function(){
        Route::post('/CreateBusiness',[BusinessController::class, 'Create']);
        Route::delete('/DeleteBusiness/{id}',[BusinessController::class, 'Delete']);
        Route::post('/UpdateBusiness/{id}',[BusinessController::class, 'Update']);
        Route::get('/ReadBusiness',[BusinessController::class, 'Read']);
    });

    Route::group(['prefix' => 'products'], function(){
        Route::post('/CreateProduct',[ProductController::class, 'Create']);
        Route::delete('/DeleteProduct/{id}',[ProductController::class, 'Delete']);
        Route::post('/UpdateProduct/{id}',[ProductController::class, 'Update']);
        Route::get('/ReadProduct',[ProductController::class, 'Read']);
    });

    Route::group(['prefix' => 'quotation'], function(){
        Route::post('/CreateQuotation',[QuotationController::class, 'Create']);
        Route::delete('/DeleteQuotation/{id}',[QuotationController::class, 'Delete']);
        Route::post('/UpdateQuotation/{id}',[QuotationController::class, 'Update']);
        Route::get('/ReadQuotation',[QuotationController::class, 'Read']);
    });
});
