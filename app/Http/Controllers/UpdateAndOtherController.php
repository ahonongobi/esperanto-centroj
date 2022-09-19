<?php

namespace App\Http\Controllers;

use App\Models\UseVideoj;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpdateAndOtherController extends Controller
{
    public  function update_video($id){
        $data = UseVideoj::where('id',$id)->first();
        return view('respondeculo/updatevideo',compact('data'));
    }

    public function updateuserVideo(Request $request){
        // update
        //if file is not empty
        if($request->hasFile('file')){
            $name = time().'.'.request()->file->getClientOriginalExtension();

            $request->file->move(public_path('storage/actuality_photos/'), $name);
            $data->videos = $name;
        }



        $data = UseVideoj::where('id',$request->id)->first();

        $data->id_user = Auth::user()->id;
        $data->center = Auth::user()->centro;
        $data->desc = $request->input('desc');

        $data->update();
    }
}
