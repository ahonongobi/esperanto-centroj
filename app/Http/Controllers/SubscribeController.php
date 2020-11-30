<?php

namespace App\Http\Controllers;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    //
    public function store(Request $req){

        request()->validate([
            'email'=>['email','required'],
        ]);

        $subscribe = new Subscribe();
        $subscribe->email = $req->email;
        $subscribe->save();
        return back();
    }
}
