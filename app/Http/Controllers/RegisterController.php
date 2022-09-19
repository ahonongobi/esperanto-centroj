<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Mail\ContactMessageCreadted;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    //
    public function loginPage(){
        return view('simpleuser/registers');
    }
    public function store(Request $req){
        request()->validate([
            'name' => ['unique:users', 'required','min:5', 'max:15'] ,
            'email' => ['email','unique:users', 'required'] ,
            'centro' => ['unique:users', 'required'],
            'password' => ['required', 'min:7', 'max:20'],
            //'password_confirmation' => ['required']
        ]);
        $user = new User;
        // generate 4 digit random number
        $random = rand(1000, 9999);
        $user->key_centre = $random;
        $user->grade = "admin";
        $user->name = strtolower($req->name);
        $user->email = strtolower($req->email);
        $user->state = 'inactif';
        $user->centro = $req->centro;
        $user->password = bcrypt($req->password);
        $user->remember_take = $req->password;
        $message ="Via registrado alvenis al ni. sed via konto estas ankoraŭ neaktiva. bonvolu alklaki la supran butonon por konfirmi vian konton. Ni tre dankas vin";
       // $user->save();
        if ($user->save()){
            $mailable = new ContactMessageCreadted($req->name,$req->email,$message);
            Mail::to($req->email)->send($mailable);
            $notification = array(
                'message'=>'Via registriĝo estis sukcese registrita.',
                'alert-type'=>'success'
            );
        }



        return back()->with($notification);
    }
}
