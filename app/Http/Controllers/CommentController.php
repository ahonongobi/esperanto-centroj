<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use DB;
class CommentController extends Controller
{
    //
    public function ajaxpost(Request $request){
           request()->validate([
               'message' =>['required'],
           ]);

           $comment = new Comment();
           $comment->message= $request->message;
           $comment->centre_id=$request->centre_id;
           $comment->centre_id=$request->centre_id;
           $center = DB::select("SELECT * FROM users WHERE id=?",[
            $request->centre_id,
           ]);
           $comment->center = $center[0]->centro;
           $comment->save();
                       return back();
          


           
    }
}
