<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UseVideoj;
use App\Models\PostAfiche;
use App\Models\membroj;
use App\Models\UserAfishoj;
class RespondeculoController extends Controller
{
    //
    public function eventoj(){
        $UseVideojCount = UseVideoj::where('id_user',Auth::user()->id)->count();
        $postsCount = PostAfiche::where('id_user',Auth::user()->id)->count();
        $UserAfishoj = UserAfishoj::where('id_user',Auth::user()->id)->count();
        return view('respondeculo/eventoj',compact('UseVideojCount','postsCount','UserAfishoj'));
    }

    public function aldoni(){
        $UseVideojCount = UseVideoj::where('id_user',Auth::user()->id)->count();
        $postsCount = PostAfiche::where('id_user',Auth::user()->id)->count();
        $UserAfishoj = UserAfishoj::where('id_user',Auth::user()->id)->count();
        return view('respondeculo/aldoni',compact('UseVideojCount','postsCount','UserAfishoj'));
    }

    public function videoj(){
        $UseVideojCount = UseVideoj::where('id_user',Auth::user()->id)->count();
        $postsCount = PostAfiche::where('id_user',Auth::user()->id)->count();
        $UseVideoj = UseVideoj::where('id_user',Auth::user()->id)->paginate(3);
        $UserAfishoj = UserAfishoj::where('id_user',Auth::user()->id)->count();
        return view('respondeculo/videoj',compact('UseVideojCount','postsCount','UseVideoj','UserAfishoj'));
    }

    public function anoncoj(){
        $UseVideojCount = UseVideoj::where('id_user',Auth::user()->id)->count();
        $postsCount = PostAfiche::where('id_user',Auth::user()->id)->count();
        $UserAfishoj = UserAfishoj::where('id_user',Auth::user()->id)->count();
        return view('respondeculo/anoncoj',compact('UseVideojCount','postsCount','UserAfishoj'));
    }
    public function respondeculo(){
        $posts = PostAfiche::where('id_user',Auth::user()->id)->paginate(3,['*'],'posts');
        $postsCount = PostAfiche::where('id_user',Auth::user()->id)->count();
        $UseVideoj = UseVideoj::where('id_user',Auth::user()->id)->paginate(3,['*'],'videoj');
        $UseVideojCount = UseVideoj::where('id_user',Auth::user()->id)->count();
        $membroj = membroj::where('id_user',Auth::user()->id)->get();
        $UserAfishoj = UserAfishoj::where('id_user',Auth::user()->id)->count();
        return view('respondeculo/index',compact('posts','UseVideoj','membroj','UseVideojCount','postsCount','UserAfishoj'));
    }
}
