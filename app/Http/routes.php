<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//parse
use Parse\ParseObject;
use Parse\ParseQuery;

Route::get('/', function () {
  // query orders
  $query = new ParseQuery("Orders");
  $results = $query->find();
  //create array of orders
foreach ($results as $key => $value) {
  $results[] = $value->Active;
}
  //check if true exists in any bool for order->Active
  if (in_array('True', $results)) {
    // an order is marked with bool = true, active orders
    $results = "You have orders";
  }
  else {
    // no orders are marked with bool = true, no active orders
    $results = "No orders, start new?";
  }
  echo $results;
    // return view('dashboard');
});

Route::get('/order/review', function ()
{
  return 'test';
});

Route::resource('order', 'OrderController');
Route::resource('inventory', 'InventoryController');
Route::get('/login', function ()
{
  return view('login');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
