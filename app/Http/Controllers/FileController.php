<?php
 
 namespace App\Http\Controllers;
 
 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Storage;
 
 class FileController extends Controller
 {
     public function upload(Request $request)
     {
         $archivo = $request->file('archivo');
         $path= Storage::put('imagenes', $archivo);
         dd($path);
 
     }
 
     public function download(Request $request)

     {
        if($user->role_id ==1){
         return Storage::download($request->path);

     } else {
        abort(403);
     }
    }
}