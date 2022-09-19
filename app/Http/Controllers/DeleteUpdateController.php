<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UseVideoj;
use App\Models\UserAfishoj;
use App\Models\PostAfiche;
use App\Models\membroj;
use Illuminate\Support\Facades\Auth;
use DB;
use Intervention\Image\Facades\Image;

class DeleteUpdateController extends Controller
{
    //
    public function delete($id){
        $delete =  UseVideoj::where('id',$id)->delete();
       // $delete->delete();
        return back();
    }
    public function delete_second($id){
        $delete = PostAfiche::where('id',$id)->delete();
        //$delete->delete();
        return back();
    }

    public function updateView($id){
        $UserAfishojn = DB::select('SELECT * FROM Centerpost WHERE id = ?',[
            $id,
        ]);
        $UserAfishoj = UserAfishoj::where('id_user',Auth::user()->id)->count();
        $postsCount = PostAfiche::where('id_user',Auth::user()->id)->count();
        $posts = PostAfiche::where('id_user',Auth::user()->id)->paginate(3);
        $postsCount = PostAfiche::where('id_user',Auth::user()->id)->count();
        $UseVideoj = UseVideoj::where('id_user',Auth::user()->id)->paginate(3);
        $UseVideojCount = UseVideoj::where('id_user',Auth::user()->id)->count();
        $admin = membroj::where('id_user',Auth::user()->id)->count();

        $updateVideo = DB::select('SELECT * FROM use_videojs WHERE id = ?',[
            $id,
        ]);

        return view('respondeculo/update',compact('UserAfishoj','postsCount','UseVideojCount','admin','UserAfishojn'));
    }



    public function update(Request $req,$id){
        request()->validate([
            'title' => 'required',
            'description1' => 'required',
            //'description2' => 'required',
            //'description3' => 'required',
        ]);
     //dd($req->all());
        // select file1, file2, file3 from Centerpost where id = $id based on model
        $datas = UserAfishoj::where('id',$id)->first();

        if($req->hasFile('file1') AND $req->file1 != null){
            $file1 = $req->file('file1');

            $filename1 = 2*time().'.'.$file1->getClientOriginalExtension();

            Image::make($file1)->save(public_path('/storage/actuality_photos/' .$filename1));
        }else{

            $filename1 = $datas->file1;
           // dd($filename1);
        }
        if($req->hasFile('file2') AND $req->file2 != null){
            $file2 = $req->file('file2');
            $filename2 = 3*time().'.'.$file2->getClientOriginalExtension();
            Image::make($file2)->save(public_path('/storage/actuality_photos/' .$filename2));
        }else{
            $filename2 = $datas->file2;
        }
        if($req->hasFile('file3') AND $req->file3 != null){
            $file3 = $req->file('file3');
            $filename3 = 4*time().'.'.$file3->getClientOriginalExtension();
            Image::make($file3)->save(public_path('/storage/actuality_photos/' .$filename3));
        }else{
            $filename3 = $datas->file3;
        }

        $UserAfishoj = DB::update('UPDATE Centerpost SET id_user=?,center=?,title=?,description1=?,description2=?,description3=?,file1=?,file2=?,file3=? WHERE id = ?',[
            Auth::user()->id,
            Auth::user()->centro,
            $req->title,
            $req->description1,
            $req->description2,
            $req->description3,
            $filename1,
            $filename2,
            $filename3,
            $id,
        ]);
        $notification = array(
            'message'=>'Post bone ghisdatighis',
            'alert-type'=>'success'
       );
        return back()->with($notification);
    }

    public  function deleteRespondeculo($id){
        $delete =  membroj::where('id',$id)->delete();
        //$delete->delete();
        $notification = array(
            'message'=>'Respondeculo bone forigis',
            'alert-type'=>'success'
        );
        return back();
    }
}
