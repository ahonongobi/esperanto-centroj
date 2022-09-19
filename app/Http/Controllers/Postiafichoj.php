<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostAfiche;
use App\Models\User;
use Image;
use Illuminate\Support\Facades\Auth;

class Postiafichoj extends Controller
{
    //
    public function afichoj(Request $req){
         request()->validate([
            'title' => ['required', 'string'] ,
            'description' => ['required', 'string'] ,
         ]);
         $post = new PostAfiche();
         $post->title = $req->input('title');
         $post->key_centre = Auth::user()->key_centre;
         $post->desc= $req->input('description');
         $post->id_user = Auth::user()->id;
         $post->center = Auth::user()->centro;
         $post->logo = Auth::user()->logo;

         if($req->hasFile('file')){
            $file1 = $req->file('file');

            $filename1 = 2*time().'.'.$file1->getClientOriginalExtension();
            Image::make($file1)->save(public_path('/storage/actuality_photos/'.$filename1));

            $post->file1 = $filename1;
         }

         $post ->save();

         $notification = array(
            'message'=>'Via agado estas bone publikitaj',
            'alert-type'=>'success'
           );
        return back()->with($notification);
    }
}
