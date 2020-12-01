<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PostAfiche;
use App\Models\Likes;
use DB;
class IndexController extends Controller
{
    //
    public function indexPost(){
        
        $pictures = DB::select('SELECT * FROM Centerpost ORDER BY id DESC LIMIT 3');
        $agadoj = DB::select('SELECT * FROM post_afiches ORDER BY id DESC LIMIT 3');
          

        foreach($agadoj as $agado){
           $aga = DB::select('SELECT * FROM users WHERE id=?',[
               $agado->id_user,
            ]);

        }

        $allagadoj= PostAfiche::paginate(3,['*'],'agado');
        //$allagadoj = DB::select('SELECT * FROM post_afiches');
        foreach($allagadoj as $allagadojn){
            $agases = DB::select('SELECT * FROM users WHERE id=?',[
                $allagadojn->id_user,
            ]);
          }
        $centroj = User::paginate(9);
        //$centroj = DB::select('SELECT * FROM users');
        $videoj = DB::select('SELECT * FROM use_videojs ORDER BY id DESC LIMIT 2');
        $popularaj = DB::select('SELECT * FROM Centerpost ORDER BY id DESC LIMIT 3');
        $popularaj2 = DB::select('SELECT * FROM post_afiches ORDER BY id DESC LIMIT 3');
        $comments = DB::select('SELECT * FROM comments ORDER BY id DESC LIMIT 3');
        $tofs = User::all();
        $likes =  DB::select('SELECT * FROM likes ORDER BY id DESC LIMIT 3');
        $centroCout = User::all()->count();
        $countlandoj = DB::table('informojs')
        ->distinct()
        ->count('lando');
        $amatoroj = DB::table('likes')
        ->distinct()
        ->count('centre_id');
        
        return view('simpleuser/index' , compact('pictures','agadoj','allagadoj','centroj','videoj','popularaj','popularaj2','comments','tofs','likes','centroCout','aga','agases','countlandoj','amatoroj'));
    }
}
