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

foreach ($results as $key => $value) {
  $orderstatus[] = json_encode($value->Active);
}
print_r($orderstatus);
  if (in_array("true", $orderstatus, true)) {
    // echo 'at least one order set to true';
    //create array
    $data[] = array("message" => "You have orders", "link" => "/order");
  }
  else {
    // echo 'no orders set to false';
    $data[] = array("message" => "No orders, start new?", "link" => "/order/create");
  }



  $view = view('dashboard')->with(array('results' => $data));
  return $view;
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
