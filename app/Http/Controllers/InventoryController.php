<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//parse
use Parse\ParseObject;
use Parse\ParseQuery;

class InventoryController extends Controller
{
    //

public function index()
  {
    $query = new ParseQuery("Inventory");

    $results = $query->find();
    foreach ($results as $key => $value) {
      $availableinventory[] = array("objectId" => $value->getobjectId(), "type" => $value->Type, "description" => $value->Description, "stock" => $value->Stock);
    }
    // var_dump($availableinventory);
     $view = view('selectorders')->with('availableinventory', $availableinventory);
     return $view;
  }

}
