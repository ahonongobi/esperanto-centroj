<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UseVideoj;
use App\Models\UserAfishoj;
use App\Models\PostAfiche;
use App\Models\membroj;
use Illuminate\Support\Facades\Auth;
use DB;
class DeleteUpdateController extends Controller
{
    //
    public function delete($id){
        $delete =  UseVideoj::find($id);
        $delete->delete();
        return back();
    }
    public function delete2($id){
        $delete = UserAfishoj::find($id);
        $delete->delete();
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
        $UserAfishoj = DB::update('UPDATE Centerpost SET id_user=?,center=?,title=?,description1=?,description2=?,description3=? WHERE id = ?',[
            Auth::user()->id,
            Auth::user()->centro,
            $req->title,
            $req->description1,
            $req->description2,
            $req->description3,

            $id,
        ]); 
        $notification = array(
            'message'=>'Post bone ghisdatighis',
            'alert-type'=>'success'
       ); 
        return back()->with($notification);
    }
}
