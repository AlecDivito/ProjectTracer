<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;

class BasicFileController extends Controller
{

  public function add(Request $request)
  {
    //if ($request->file('file')->isValid()) {
    //  $file = $request->file('file');
    //  $path = $request->photo->store('images');
   // }
    //$request['fileDescription'];
    //$request['fileName'];
    return 'request worked';
  }

  public function delete(Request $request)
  {

  }

  public function download(Request $request)
  {

  }
}
