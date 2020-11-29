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

    public function updateView($id){
        $UserAfishoj = DB::select('SELECT * FROM Centerpost WHERE id = ?',[
            $id,
        ]);
        $postsCount = PostAfiche::where('id_user',Auth::user()->id)->count();
        $posts = PostAfiche::where('id_user',Auth::user()->id)->paginate(3);
        $postsCount = PostAfiche::where('id_user',Auth::user()->id)->count();
        $UseVideoj = UseVideoj::where('id_user',Auth::user()->id)->paginate(3);
        $UseVideojCount = UseVideoj::where('id_user',Auth::user()->id)->count();
        


        return view('respondeculo/update',compact('UserAfishoj','postsCount','UseVideojCount',));
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
