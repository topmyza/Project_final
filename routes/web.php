<?php

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

Route::get('/login',['as'=>'frontend.beforelogin.login','uses'=>'AllPageController@goToLogin']);
Route::get('/register',['as'=>'frontend.beforelogin.register','uses'=>'AllPageController@goToRegister']);
Route::get('/forgotpassword',['as'=>'frontend.beforelogin.forgotpassword','uses'=>'AllPageController@goToForgotpassword']);
Route::get('/changepassword',['as'=>'frontend.beforelogin.changepassword','uses'=>'AllPageController@goToChangepassword']);

Route::get('/home',['as'=>'frontend.afterlogin.homemenu','uses'=>'AllPageController@goToHomeMenu']);
Route::get('/view-transaction-history',['as'=>'frontend.afterlogin.transactionhistory','uses'=>'AllPageController@gotoViewTransactionHistory']);
Route::get('/view-recent-transactions',['as'=>'frontend.afterlogin.recenttransactions','uses'=>'AllPageController@gotoViewRecentTransactions']);
Route::get('/view-status-washing-machine',['as'=>'frontend.afterlogin.checkstatuswm','uses'=>'AllPageController@gotoViewStatusWM']);


