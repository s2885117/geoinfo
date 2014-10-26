<?php

class UploadController extends BaseController {

  public function index() {}

  public function download()
  {
    $uploads = Upload::all();
   // return View::make('uploads.downloads', compact('uploads'));
  }

  public function downloadfile($id)
  {
    $upload = Upload::find($id);
    return Response::download(public_path() . $upload->file_url, $upload->file_name);
  }

  public function upload()
  {
    if ((Auth::user()) !== null)
      {
      $project = Project::find(Auth::user()->project_id);
    //$project = Project::find($id);
    return View::make('uploads.uploads', compact('project'));
    }
    else return Redirect::to('index');
  }

  public function uploadingfiles($id)
  {
    $file = Input::file('file');
    $destinationPath = public_path() . '/uploads/';
    $filename = str_random(32);
    $orig_filename = $file->getClientOriginalName();
    $extension = $file->getClientOriginalExtension(); 
    $size = $file->getsize();
    $url = "/uploads/" . $filename . '.' . $extension;
    $upload_success = Input::file('file')->move($destinationPath, $filename . '.' . $extension);
    $upload = new Upload;
    $upload->file_name = $orig_filename;
    $upload->file_url = $url;
    $upload->file_size = $size;
    $upload->projects_id = $id;
    $upload->save();
    return Redirect::action('ProjectController@index');
  }

  public function deleteFile($id)
  {    
    $filePath = DB::table('uploads')->where('id', $id)->pluck('file_url');
    File::delete(public_path().$filePath);
    DB::table('uploads')->where('id', $id)->delete();
    return Redirect::action('ProjectController@index');
  }
}
