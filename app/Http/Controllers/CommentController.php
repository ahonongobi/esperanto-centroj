<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

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
           $comment->save();
                       return back();
          


           
    }
}
