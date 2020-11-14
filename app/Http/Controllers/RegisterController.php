<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function loginPage(){
        return view('simpleuser/registers');
    }
    public function store(Request $req){
        request()->validate([
            'name' => ['alpha_dash', 'unique:users', 'required','min:5', 'max:15'] ,
            'email' => ['email','unique:users', 'required'] ,
            'centro' => ['alpha_dash', 'unique:users', 'required'] ,
            'password' => ['required', 'min:7', 'max:20'],
            //'password_confirmation' => ['required'] 
        ]);
        $user = new User;
        $user->name = strtolower($req->name);
        $user->email = strtolower($req->email);
        $user->state = 'inactif';
        $user->centro = $req->centro;
        $user->password = bcrypt($req->password);
        $user->save();
        $notification = array(
            'message'=>'votre inscription a bien été envoyé'."<a href=''>Chi tie</a>",
            'alert-type'=>'success'
           );
        return back()->with($notification);
    }
}
