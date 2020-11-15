<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\PostAfiche;
use App\Models\UseVideoj;
use App\Models\membroj;
class LoginController extends Controller
{
    //
    public function loginIndex(){

        
        return view('simpleuser/login');
    }
    public function indexRespondeculo(){
        
        $posts = PostAfiche::where('id_user',Auth::user()->id)->paginate(3);
        $postsCount = PostAfiche::where('id_user',Auth::user()->id)->count();
        $UseVideoj = UseVideoj::where('id_user',Auth::user()->id)->paginate(3);
        $UseVideojCount = UseVideoj::where('id_user',Auth::user()->id)->count();
        $membroj = membroj::where('id_user',Auth::user()->id)->get();

        return view('respondeculo/index',compact('posts','UseVideoj','membroj','UseVideojCount','postsCount'));
    }

    public function loginUser(Request $req) {
        $validateData = request()->validate([
            'email' => ['required'] ,
            'password' => ['required'],
        ]);

        if(Auth::attempt([
            'email' => $req->email,
            'password' => $req->password
        ])){

            if(Auth::user()->state == "actif"){
                return redirect('wi-zkl10_va/'.Auth::user()->email);
            } elseif(Auth::user()->state=="inactif"){
                $notif = array(
                    'message'=>'Votre compte est encore inactif',
                    'alert-type'=>'warning'
               ); 
                return back()->with($notif);
            }
        }else{
            $notification = array(
                'message'=>'Email ou mot de passe incorrect',
                'alert-type'=>'warning'
           ); 
            return back()->with($notification);
    
        }

    }
    public function logout(){
        Auth::logout();
        return view('simpleuser/index');
    }
}
