<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Likes;
class LikesController extends Controller
{
    //

    public function likes(Request $request){
        $likes = new Likes();
        $likes->centre_id=$request->centre_id;
        $likes->save();
    }
}
