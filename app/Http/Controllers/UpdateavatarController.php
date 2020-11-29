<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UpdateavatarController extends Controller
{
    //
    public function update(Request $req){
        request()->validate([
            'avatar' => ['required', 'mimes:jpeg,bmp,png', 'image'] ,
        ]);
           

        if($req->hasFile('avatar')){
            $profile_photo_path = $req->file('avatar');
            $filename = time().'.'.$profile_photo_path->getClientOriginalExtension();
            //$req->profile_photo_path->storeAs('member_profile', $profile_photo_path, 'public');
            Image::make($profile_photo_path)->resize(262,262)->save(public_path('/storage/actuality_photos/' .$filename));
            //$req->profile_photo_path->storeAs(public_path('/storage/member_profile/', $filename));
                                                    
            //Auth::user()->update(['profile_photo_path' => $filename]);
            $user = Auth::user();
            $user->logo = $filename;
            $user->save();$notification = array(
                'message'=>'Via profilo estas bone ghisdatigita',
                'alert-type'=>'success'
               );
            return back()->with($notification); return back()->with($notification);
        }

    }
}
