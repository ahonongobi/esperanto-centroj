<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UseVideoj;
use App\Models\PostAfiche;
use App\Models\membroj;
class RespondeculoController extends Controller
{
    //
    public function eventoj(){
        $UseVideojCount = UseVideoj::where('id_user',Auth::user()->id)->count();
        $postsCount = PostAfiche::where('id_user',Auth::user()->id)->count();

        return view('respondeculo/eventoj',compact('UseVideojCount','postsCount'));
    }

    public function aldoni(){
        $UseVideojCount = UseVideoj::where('id_user',Auth::user()->id)->count();
        $postsCount = PostAfiche::where('id_user',Auth::user()->id)->count();

        return view('respondeculo/aldoni',compact('UseVideojCount','postsCount'));
    }

    public function videoj(){
        $UseVideojCount = UseVideoj::where('id_user',Auth::user()->id)->count();
        $postsCount = PostAfiche::where('id_user',Auth::user()->id)->count();
        $UseVideoj = UseVideoj::where('id_user',Auth::user()->id)->paginate(3);
        return view('respondeculo/videoj',compact('UseVideojCount','postsCount','UseVideoj'));
    }

    public function anoncoj(){
        $UseVideojCount = UseVideoj::where('id_user',Auth::user()->id)->count();
        $postsCount = PostAfiche::where('id_user',Auth::user()->id)->count();

        return view('respondeculo/anoncoj',compact('UseVideojCount','postsCount'));
    }
    public function respondeculo(){
        $posts = PostAfiche::where('id_user',Auth::user()->id)->paginate(3);
        $postsCount = PostAfiche::where('id_user',Auth::user()->id)->count();
        $UseVideoj = UseVideoj::where('id_user',Auth::user()->id)->paginate(3);
        $UseVideojCount = UseVideoj::where('id_user',Auth::user()->id)->count();
        $membroj = membroj::where('id_user',Auth::user()->id)->get();

        return view('respondeculo/index',compact('posts','UseVideoj','membroj','UseVideojCount','postsCount'));
    }
}
