<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAfishoj;
use App\Models\UseVideoj;
use Image;
use Illuminate\Support\Facades\Auth;
class SaveUserAfrisoj extends Controller
{
    //
    public function savedata(Request $req){
        request()->validate([
            'title' => ['required', 'string'] ,
            'description1' => ['required', 'string'] ,
            'description2' => ['required', 'string'] ,
            'description3' => ['required', 'string'] ,
            'file1' => ['required', 'image'] ,
            'file2' => ['required', 'image'] ,
            'file3' => ['required', 'image'] ,
            
        ]);

            $post  = new UserAfishoj();
            $post->id_user = Auth::user()->id;
            $post->center = Auth::user()->centro;
            $post->title = $req->input('title');
            $post->description1 = $req->input('description1');
            $post->description2 = $req->input('description2');
            $post->description3 = $req->input('description3');

            if($req->hasFile('file1') AND $req->hasFile('file2') AND $req->hasFile('file3'))
            {
                $file1 = $req->file('file1');
                $file2 = $req->file('file2');
                $file3 = $req->file('file3');
                

                //$collection = collect([1, 2, 3, 4, 5, ]);

                $filename1 = 2*time().'.'.$file1->getClientOriginalExtension();
                Image::make($file1)->save(public_path('/storage/actuality_photos/' .$filename1));
                
                $filename2 = 3*time().'.'.$file2->getClientOriginalExtension();
                Image::make($file2)->save(public_path('/storage/actuality_photos/' .$filename2));

                $filename3 = 4*time().'.'.$file3->getClientOriginalExtension();
                Image::make($file3)->save(public_path('/storage/actuality_photos/' .$filename3));

               
                $post->file1 = $filename1;
                $post->file2 = $filename2;
                $post->file3 = $filename3;
                
            }
            $post->save();
            $notification = array(
                'message'=>'Via agado estas bone publikitaj',
                'alert-type'=>'success'
               );
            return back()->with($notification);
            

    }
    public function uploadVideoj(Request $req){
        request()->validate([
            'desc' => ['required', 'string'] ,
           
            
        ]);
            $postvideo  = new UseVideoj();
            $postvideo->id_user = Auth::user()->id;
            $postvideo->center = Auth::user()->centro;
            $postvideo->desc = $req->input('desc');

            if($req->hasFile('videos'))
            {
                $file1 = $req->file('videos');
               
                

                //$collection = collect([1, 2, 3, 4, 5, ]);

                $filename1 = 2*time().'.'.$file1->getClientOriginalExtension();
                //make($file1)->save(public_path('/storage/actuality_photos/' .$filename1));
                $path = public_path().'/storage/actuality_photos/';
                
                $file1->move($path,$filename1);
                //$file1->move_uploaded_file($filename1,$path);
                $postvideo->videos = $filename1;
                
                
            }
            $postvideo->save();
            $notification = array(
                'message'=>'Via agado estas bone publikitaj',
                'alert-type'=>'success'
               );
            return back()->with($notification);
        
    }
}
