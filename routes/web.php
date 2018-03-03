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

Route::get('/','HomeController@home');
Route::get('/homes','HomeController@homes')->name('homes');

//Account 路由
Route::get('/accounts','AccountController@accountList')->name('accountsList');
Route::get('/createAccounts','AccountController@createAccount')->name('createAccount');
Route::get('/getBalance','AccountController@getBalance')->name('getBalance');
Route::get('/chargeAccount','AccountController@chargeAccount')->name('chargeAccount');
Route::get('/registerAccount','AccountController@registerAccount')->name('registerAccount');
Route::get('/registerAccountList','AccountController@registerAccountList')->name('registerAccountList');


//Provider路由
Route::get('/provideData','ProviderController@provideData')->name('provideData');
Route::get('/provideDataList','ProviderController@provideDataList')->name('provideDataList');
Route::get('/provideTask','ProviderController@provideTask')->name('provideTask');
Route::get('/taskList','ProviderController@taskList')->name('taskList');

//Requester路由
Route::get('/requestData','RequesterController@requestData')->name('requestData');
Route::get('/requestDataList','RequesterController@requestDataList')->name('requestDataList');
Route::get('/requestTask','RequesterController@requestTask')->name('requestTask');
Route::get('/requestTaskList','RequesterController@requestTaskList')->name('requestTaskList');


//Search 路由
Route::get('/dataList','SearchController@dataList')->name('dataList');
Route::get('/searchData','SearchController@searchData')->name('searchData');
Route::get('/searchDataRequest','SearchController@searchDataRequest')->name('searchDataRequest');

Route::get('/taskList','SearchController@taskList')->name('taskList');
Route::get('/searchTask','SearchController@searchTask')->name('searchTask');
Route::get('/searchTaskRequest','SearchController@searchTaskRequest')->name('searchTaskRequest');

//Managements 路由
Route::get('/personalDataList','ManagementsController@personalDataList')->name('personalDataList');
Route::get('/provideDataControl','ManagementsController@provideDataControl')->name('provideDataControl');
Route::get('/personalTaskList','ManagementsController@personalTaskList')->name('personalTaskList');
Route::get('/provideTaskControl','ManagementsController@provideTaskControl')->name('provideTaskControl');

//Transactions
Route::get('/searchTransaction','TransactionsController@searchTransaction')->name('searchTransaction');
Route::get('/etherTransaction','TransactionsController@etherTransaction')->name('etherTransaction');

//尝试更新页面  index
Route::get('/index',function (){
    return view('static_pages.index');
});