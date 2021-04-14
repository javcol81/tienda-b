<?php

use App\Http\Controllers\PaymentController;
use App\Events\OrderStatusChangedEvent;
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

Route::get('/fire', function () {
    event(new OrderStatusChangedEvent);
    return 'Fired';
});





Route::get('/register', function () {
    return view('register');
});


Route::get('/login', function () {
    return view('login');
});



Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/funcionamiento', function () {
    return view('funcionamiento');
});

Route::get('/funcionamiento2', function () {
    return view('funcionamiento2');
});

Route::get('/terminos', function () {
    return view('terminos');
});

Route::get('/politicas', function () {
    return view('politicas');
});



Route::post('/recibido', 'MailController@getMail')->name('recibido');


Auth::routes(['verify' => true]);
Route::get('login/{driver}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{driver}/callback', 'Auth\LoginController@handleProviderCallback');


Route::get('/welcome', 'UsersController@index')->name('welcome')->middleware('verified');
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/Modelo', 'UsersController@Modelo')->name('Modelo')->middleware('admin');
Route::get('/Pacifico', 'UsersController@Pacifico')->name('Pacifico')->middleware('admin');
Route::get('/Abuela', 'UsersController@Abuela')->name('Abuela')->middleware('admin');
Route::get('/Ceferino', 'UsersController@Ceferino')->name('Ceferino')->middleware('admin');
Route::get('/Ego', 'UsersController@Ego')->name('Ego')->middleware('admin');
Route::get('/Juan', 'UsersController@Juan')->name('Juan')->middleware('admin');
Route::get('/Miga', 'UsersController@Miga')->name('Miga')->middleware('admin');
Route::get('/Picolino', 'UsersController@Picolino')->name('Picolino')->middleware('admin');
Route::get('/punto', 'UsersController@punto')->name('template.evento2')->middleware('admin');
Route::get('/compra', 'UsersController@compra')->name('compra')->middleware('admin');

Route::post('/evento', 'UsersController@evento')->name('template.evento')->middleware('admin');
Route::post('/evento2', 'UsersController@evento2')->name('template.evento2')->middleware('admin');


// User routes
Route::middleware('auth')->group(function () {
	Route::get('/order', 'UserOrderController@index')->name('user.order');
	Route::post('/order/create', 'UserOrderController@create')->name('user.order.create');
	Route::post('/order', 'UserOrderController@store')->name('user.order.store');
	Route::get('/order/{order}', 'UserOrderController@show')->name('user.order.show');
});

// Admin Routes - make sure you implement an auth layer here
Route::prefix('admin')->group(function () {
	Route::get('/order', 'AdminOrderController@index')->name('admin.order');
	Route::get('/order/edit/{order}', 'AdminOrderController@edit')->name('admin.order.edit');
	Route::patch('/order/{order}', 'AdminOrderController@update')->name('admin.order.update');
});



//MercadoPago

Route::post('/payments/pay', [PaymentController::class, 'pay'])->name('pay');
Route::get('/payments/approval', [PaymentController::class, 'approval'])->name('approval');
Route::get('/payments/cancelled', [PaymentController::class, 'cancelled'])->name('cancelled');

Auth::routes();

Route::post('/MPhome', [App\Http\Controllers\UsersController::class, 'index'])->name('MPhome');
Route::post('/tarjeta', [App\Http\Controllers\UsersController::class, 'index'])->name('tarjeta');