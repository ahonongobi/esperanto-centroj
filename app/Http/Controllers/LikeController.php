<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Likes;
class LikeController extends Controller
{
    //

    public function store(Request $request,$id,$id_user,$image){

        $isExist = Likes::where('ip_adress',request()->ip())->where('machine',$request->server('HTTP_USER_AGENT'))->where('idpost',$id)->count();
        
        if($isExist==0){

            $likes = new Likes();
            $likes->idpost = $id;
            $likes->centre_id = $id_user;
            $likes->ip_adress = request()->ip();
            $likes->machine = $request->server('HTTP_USER_AGENT');
            $likes->images = $image;
            $likes->save();
            
            $notification = array(
                'message'=>'Ŝato aldonis.',
                'alert-type'=>'success'
               );
            return back()->with($notification);
        }
        else{
            $notification = array(
                'message'=>'Vi ne plus povas Ŝati tion.',
                'alert-type'=>'warning'
               );
            return back()->with($notification);
        }
        

    }
}
