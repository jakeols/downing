<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//parse
use Parse\ParseObject;
use Parse\ParseQuery;

class OrderController extends Controller
{
  //current orders
  public function index()
  {
    return view('currentorders');
  }

  public function create()
  {
    return view('neworder');
  }

  // create new order
  public function show($id)
  {


    // return view('neworder');

  }


}
