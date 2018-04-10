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

Route::get('/', 'ProductController@index');

Route::get('receipt','CartController@receipt');



Route::get('/thankyou','ThankyouController@index');



Route::get('/home','HomeController@index');

Route::prefix('graph')->group(function(){
	Route::get('totalSalesPerItem','GraphController@totalSalesPerItem');

	Route::get('wholeYearSalesPerItem/{yr}','GraphController@wholeYearSalesPerItem');

	Route::get('yearlySales/{yr}','GraphController@yearlySales');

});





Route::prefix('cart')->group(function(){
	Route::get('/','CartController@index');

	Route::any('add/{id}','CartController@add_to_cart');

	Route::any('/remove/{id}','CartController@remove');



	Route::post('/checkout','CartController@checkout');

	Route::post('/order','CartController@order');
	Route::post('/checkorder','CartController@checkOrder');

});



Auth::routes();

Route::prefix('home')->group(function(){ //start of home prefix
	Route::get('account_information','HomeController@account_information');
	Route::get('orders','HomeController@orders');
	Route::get('cancellations','HomeController@cancellations');
	Route::get('returns','HomeController@returns');
	Route::get('address_book','HomeController@address_book');
	Route::get('personal_information','HomeController@personal_information');


	Route::get('orders/cancel/{id}','OrderController@cancelOrder');

	Route::post('savebilling','HomeController@savebilling');
	Route::post('saveshipping','HomeController@saveshipping');

});//end of home  prefix




Route::prefix('admin')->group(function(){
	Route::get('/','AdminController@index');

	Route::get('/orders','AdminController@orders');
	Route::get('/cancellations','AdminController@cancellations');
	Route::get('/reports','AdminController@reports');
	Route::get('/products','AdminController@products');
	Route::get('/forecast','AdminController@forecast');
	Route::get('/apriori','AdminController@apriori');
	Route::get('/accounts','AdminController@accounts');

	Route::get('/apriori','AdminController@apriori');

	Route::get('/apriori/sets','AdminController@sets');

	Route::get('orders/{id}/{status}','AdminController@updateOrderStatus');


	Route::get('orders/{id}','AdminController@buyer');
});




Route::prefix('user')->group(function(){
	Route::middleware(['auth',])->group(function () {
    	Route::post('/change_password','UserController@changePassword');
    	Route::post('/register','UserController@register');

	});
});


Route::prefix('product')->group(function(){

	Route::get('product_detail/{id}','ProductController@product_detail');

	Route::middleware(['auth',])->group(function () {
		Route::get('new','ProductController@new');
		Route::get('edit/{id}','ProductController@edit');
		Route::get('delete/{id}','ProductController@delete');
		Route::get('details/{id}','ProductController@details');



		Route::post('save','ProductController@save');
		Route::post('update','ProductController@update');

	});
});

//payment form
Route::get('paypalform', 'PaymentController@index');

// route for processing payment
Route::post('paypal', 'PaymentController@payWithpaypal');

// route for check status of the payment
Route::get('status', 'PaymentController@getPaymentStatus');



Route::get('mail','MailController@basic_email');

Route::get('/thankyou1','ThankyouController@index1');