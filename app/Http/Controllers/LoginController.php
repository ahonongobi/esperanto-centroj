<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\PostAfiche;
use App\Models\UseVideoj;
use App\Models\membroj;
use App\Models\UserAfishoj;
use Illuminate\Support\Facades\DB;
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
                    'message'=>'Via konto estas ankoraŭ neaktiva',
                    'alert-type'=>'warning'
               );
                return back()->with($notif);
            }
        }else{
            $notification = array(
                'message'=>'Malĝusta retpoŝto aŭ pasvorto',
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

        return redirect('/')->with('pictures',$pictures)->with('agadoj',$agadoj)->with('aga',$aga)->with('allagadoj',$allagadoj)->with('agases',$agases)->with('likes',$likes)->with('centroj',$centroj)->with('videoj',$videoj)->with('centroCout',$centroCout)->with('countlandoj',$countlandoj)->with('amatoroj',$amatoroj)->with('tofs',$tofs)->with('popularaj',$popularaj)->with('popularaj2',$popularaj2)->with('comments',$comments);
       // return view('simpleuser/index',compact('pictures','agadoj','allagadoj','centroj','videoj','centroCout','countlandoj','amatoroj','aga','agases','likes','tofs','popularaj','popularaj2','comments'));
    }

    public function verified($email){
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $pin = mt_rand(1000000, 9999999)
    . mt_rand(1000000, 9999999)
    . $characters[rand(0, strlen($characters) - 1)];

// shuffle the result
        $string = str_shuffle($pin);
        $state = "actif";

        $remember_token_update = DB::update('UPDATE users SET remember_token=?, state =? WHERE email=?',[
            $string,
            $state,
            $email,
        ]);


        if($remember_token_update){
            $notification = array(
                'message'=>'Via konto estas konfirmita. Ensalutu nun.',
                'alert-type'=>'success'
               );

            return redirect('/logon')->with($notification);
        }
        else {
            $notification = array(
                'message'=>'Via konto ne estas kontrolita. Bonvolu reprovi poste.',
                'alert-type'=>'warning'
               );
            return redirect('/logon')->with($notification);
        }


    }
}
