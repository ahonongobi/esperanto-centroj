<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
class IndexController extends Controller
{
    //
    public function indexPost(){
        
        $pictures = DB::select('SELECT * FROM Centerpost ORDER BY id DESC LIMIT 3');
        $agadoj = DB::select('SELECT * FROM post_afiches ORDER BY id DESC LIMIT 3');

        $allagadoj = DB::select('SELECT * FROM post_afiches');
        $centroj = DB::select('SELECT * FROM users');
        $videoj = DB::select('SELECT * FROM use_videojs ORDER BY id DESC LIMIT 2');
        return view('simpleuser/index' , compact('pictures','agadoj','allagadoj','centroj','videoj'));
    }
}
