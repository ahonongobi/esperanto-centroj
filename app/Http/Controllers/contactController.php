<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMessageCreadted;
use Illuminate\Support\Facades\Mail;


class contactController extends Controller
{
    //
    
    public function store(Request $request){
        request()->validate([
               'name'=>['required','string'],
               'email'=>['required','email'],
               'subject'=> ['required','string'],
               'message'=>['required','string'],
        ]);

        $mailable = new ContactMessageCreadted($request->name,$request->email,$request->message);
        Mail::to("abyssiniea@gmail.com")->send($mailable);
        $notification = array(
            'message'=>'Via mesagho bone alvenis che ni. ni rekontaktos vin tre baldaux',
            'alert-type'=>'success'
           );
        return back()->with($notification);
    }
}
