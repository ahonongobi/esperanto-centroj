<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\PostAfiche;
use App\Models\UseVideoj;
use App\Models\membroj;
use App\Models\UserAfishoj;
use DB;
class LoginController extends Controller
{
    //
    public function loginIndex(){

        
        return view('simpleuser/login');
    }
    public function guest(Request $req){

        $email = $req->get('email');
        $pass = $req->get('pass');
        return view('simpleuser/loginGuest',compact('email','pass'));
    }
 

    public function indexRespondeculo(){
        
        $posts = PostAfiche::where('id_user',Auth::user()->id)->paginate(3);
        $postsCount = PostAfiche::where('id_user',Auth::user()->id)->count();
        $UseVideoj = UseVideoj::where('id_user',Auth::user()->id)->paginate(3);
        $UseVideojCount = UseVideoj::where('id_user',Auth::user()->id)->count();
        $membroj = membroj::where('id_user',Auth::user()->id)->paginate(4,['*'],'admin');
        $UserAfishoj = UserAfishoj::where('id_user',Auth::user()->id)->count();
        $admin = membroj::where('id_user',Auth::user()->id)->count();
        return view('respondeculo/index',compact('posts','UseVideoj','membroj','UseVideojCount','postsCount','UserAfishoj','admin'));
    }

    public function loginUser(Request $req) {
        $validateData = request()->validate([
            'email' => ['required'] ,
            'password' => ['required'],
        ]);

        $guest = User::where('remember_token',$req->password)->count();
        
        
        
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
        $pictures = DB::select('SELECT * FROM Centerpost ORDER BY id DESC LIMIT 3');
        $agadoj = DB::select('SELECT * FROM post_afiches ORDER BY id DESC LIMIT 3');
        

        $allagadoj= PostAfiche::paginate(3,['*'],'agado');
        //$allagadoj = DB::select('SELECT * FROM post_afiches');
        $centroj = User::paginate(9);
        //$centroj = DB::select('SELECT * FROM users');
        $videoj = DB::select('SELECT * FROM use_videojs ORDER BY id DESC LIMIT 2');

        foreach($agadoj as $agado){
            $aga = DB::select('SELECT * FROM users WHERE id=?',[
                $agado->id_user,
             ]);
 
         }

         
        foreach($allagadoj as $allagadojn){
            $agases = DB::select('SELECT * FROM users WHERE id=?',[
                $allagadojn->id_user,
            ]);
          }
        $likes =  DB::select('SELECT * FROM likes ORDER BY id DESC LIMIT 3');
        $centroCout = User::all()->count();
        $countlandoj = DB::table('informojs')
        ->distinct()
        ->count('lando');
        $amatoroj = DB::table('likes')
        ->distinct()
        ->count('centre_id');
        $tofs = User::all();
        $popularaj = DB::select('SELECT * FROM Centerpost ORDER BY id DESC LIMIT 3');
        $popularaj2 = DB::select('SELECT * FROM post_afiches ORDER BY id DESC LIMIT 3');
        $comments = DB::select('SELECT * FROM comments ORDER BY id DESC LIMIT 3');

        return view('simpleuser/index',compact('pictures','agadoj','allagadoj','centroj','videoj','centroCout','countlandoj','amatoroj','aga','agases','likes','tofs','popularaj','popularaj2','comments'));
    }
}