<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Response;

class BasicFileController extends Controller
{

  public function add(Request $request)
  {
    $fileClass = new File();

    if ($request->hasFile('file') && $request->file('file')->isValid()) {
      $fileClass->fileLocation = $request->file('file')->store('files');
    } else {
      return 'File Failed to upload';
    }
    $fileClass->projectId = $request['projectId'];
    $fileClass->fileDescription = $request['fileDescription'];
    $fileClass->fileName = $request['fileName'];
    $fileClass->save();
    return 'File was uploaded successfully';
  }

  public function delete(Request $request)
  {
    $file = File::where('fileId', $request['fileId'])->first();
    if($file->delete() && Storage::delete($file->fileLocation)) {
      return 'File was deleted successfully';
    } else {
      return 'File was not deleted';
    }
  }

  public function download(Request $request)
  {
    $file = File::where('fileId', $request['fileId'])->first();
    return ( Response::download(storage_path() . '/app/' . $file->fileLocation) );
  }
}
