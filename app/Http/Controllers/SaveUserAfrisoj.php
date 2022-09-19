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
            'description1' => ['required'] ,
            //'description3' => ['required', 'string'] ,
            'file1' => ['required', 'image'] ,
            //'file2' => ['required', 'image'] ,
            //'file3' => ['required', 'image'] ,

        ]);

            $post  = new UserAfishoj();
            $post->id_user = Auth::user()->id;
            $post->key_centre = Auth::user()->key_centre;
            $post->center = Auth::user()->centro;
            $post->title = $req->input('title');
            $post->description1 = $req->input('description1');
            $post->description2 = $req->input('description2');
            $post->description3 = $req->input('description3');

            if($req->hasFile('file1'))
            {
                $file1 = $req->file('file1');
                $file2 = $req->file('file2') ?? null;
                $file3 = $req->file('file3') ?? null;


                //$collection = collect([1, 2, 3, 4, 5, ]);

                $filename1 = 2*time().'.'.$file1->getClientOriginalExtension();
                Image::make($file1)->save(public_path('/storage/actuality_photos/' .$filename1));

                if($file2 != null){
                    $filename2 = 3*time().'.'.$file2->getClientOriginalExtension();
                    Image::make($file2)->save(public_path('/storage/actuality_photos/' .$filename2));
                }
                if($file3 != null){
                    $filename3 = 4*time().'.'.$file3->getClientOriginalExtension() ?? null;
                    Image::make($file3)->save(public_path('/storage/actuality_photos/' .$filename3));
                }




                $post->file1 = $filename1;
                $post->file2 = $filename2 ?? null;
                $post->file3 = $filename3 ?? null;

            }
            $post->save();
            $notification = array(
                'message'=>'Via agado estas bone publikitaj',
                'alert-type'=>'success'
               );
            return back()->with($notification);


    }
    public function uploadVideoj_(Request $req){
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
            $UseVideojCount = UseVideoj::where('id_user',Auth::user()->id)->count();
            if($UseVideojCount >= 3){
                $notification = array(
                    'message'=>'Vi jam enretigis 3 videoj (maksimume)',
                    'alert-type'=>'warning'
                   );
            } else{
                $postvideo->save();
                $notification = array(
                    'message'=>'Via agado estas bone publikitaj',
                    'alert-type'=>'success'
                   );

            }
            return back()->with($notification);



    }
    public  function uploadVideoj(Request $request){

        request()->validate([
            'desc' => ['required'] ,


        ]);
        $postvideo  = new UseVideoj();
        $postvideo->id_user = Auth::user()->id;
        $postvideo->key_centre = Auth::user()->key_centre;
        $postvideo->center = Auth::user()->centro;
        $postvideo->desc = $request->input('desc');

        $name = time().'.'.request()->file->getClientOriginalExtension();

        $request->file->move(public_path('storage/actuality_photos/'), $name);


        $postvideo  = new UseVideoj();
        $postvideo->id_user = Auth::user()->id;
        $postvideo->center = Auth::user()->centro;
        $postvideo->desc = $request->input('desc');
        $postvideo->videos = $name;
        $postvideo->save();

        return response()->json(['success'=>'Successfully uploaded.']);
    }
}


