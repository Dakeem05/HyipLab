<?php

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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


// Websites

Route::get('',[\App\Http\Controllers\WebsiteController::class,"home"]);
Route::get('/about',[\App\Http\Controllers\WebsiteController::class,"about"]);
Route::get('/contact',[\App\Http\Controllers\WebsiteController::class,"contact"]);
Route::get('/faq',[\App\Http\Controllers\WebsiteController::class,"faq"]);
Route::get('/privacy-policy',[\App\Http\Controllers\WebsiteController::class,"privacy_policy"]);
Route::get('/terms-and-condtitions',[\App\Http\Controllers\WebsiteController::class,"terms_and_condtitions"]);


Route::any("test", function()
{
    
    dd(Carbon::now()->toDateString());

});
Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});


Auth::routes();
Route::get('/deposit_receipt/{image}', function ($image) {
    $basePath = public_path() . '/uploads/deposit_receipts';

    if (File::exists($basePath .'/' . $image)) {
        return response()->file($basePath .'/'. $image);
    } else {
        return response('Not found', 404);
    }
});

Route::post('/registerPost', [App\Http\Controllers\Auth\RegisterController::class,'create'])->name('registerPost');
Route::middleware('auth')->group(
function()
{

    Route::group(['prefix'=>'user'], function(){
        Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('/change-password', [App\Http\Controllers\HomeController::class, 'change_password_page']);
        Route::post('/change-password', [App\Http\Controllers\HomeController::class, 'change_password']);


        // investment routes
        Route::get("/investment_plan", [\App\Http\Controllers\InvestmmentController::class,"show_investment"]);
        Route::post("/investment/preview", [\App\Http\Controllers\InvestmmentController::class,"review_investment"]);
        Route::post("/investment/start", [\App\Http\Controllers\InvestmmentController::class,"start_investment"]);
        Route::get("/investment/history", [\App\Http\Controllers\InvestmmentController::class,"investment_history"]);


        

        //Deposit Routes
        Route::get('deposit',[\App\Http\Controllers\TransactionController::class,"deposit"]);
        Route::post('deposit/create_request',[\App\Http\Controllers\TransactionController::class,"deposit_create"]);
        Route::get('deposit/history',[\App\Http\Controllers\TransactionController::class,"deposit_history"])->name("deposit.history");

        // withdraw 
        Route::get('withdraw',[\App\Http\Controllers\TransactionController::class,"withdraw_page"])->name("withdraw_page");
        Route::post('withdraw/create_request',[\App\Http\Controllers\TransactionController::class,"make_withdraw_request"]);




        // transaction history routes
        Route::get('transaction/history',[\App\Http\Controllers\TransactionController::class,"transaction_history"]);
        Route::get('referrals',[\App\Http\Controllers\ReferralController::class, "referrals"]);


        // profile routes
        Route::get("profile-setting",[\App\Http\Controllers\HomeController::class,"profile_fund"]);
        Route::post("change_password",[\App\Http\Controllers\HomeController::class,"change_password"]);


        

    });
   

});


Route::middleware('auth')->group(
    function()
    {
        Route::group(['prefix'=>'admin'], function(){
            Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'home'])->name('admin.dashboard');
            Route::get('/withdrawal/request', [App\Http\Controllers\Admin\AdminController::class, 'withdraw_request_page'])->name('admin.withdraw_requests');
            Route::get('/change-password', [App\Http\Controllers\Admin\AdminController::class, 'change_password_page']);
            Route::post("change_password",[\App\Http\Controllers\Admin\AdminController::class,"change_password"]);



            // actions on transactions
            Route::post("transaction/action", [App\Http\Controllers\Admin\AdminController::class, 'transaction_action']);
            // Route::post("transaction/action/withdraw", [App\Http\Controllers\Admin\AdminController::class, 'withdraw_action']);

            
          
    
        });
       
    
    });
    

