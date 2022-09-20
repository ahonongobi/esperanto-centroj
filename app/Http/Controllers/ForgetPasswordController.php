<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgetPasswordController extends Controller
{
    public function forgesispasvorton(){
        return view('simpleuser.forget-password');
    }

    public function submitForgetPasswordForm(Request $request)

    {

        $request->validate([

            'email' => 'required|email|exists:users',

        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([

            'email' => $request->email,

            'token' => $token,

            'created_at' => Carbon::now()

        ]);

        Mail::send('emails.forgetPassword', ['token' => $token], function ($message) use ($request) {

            $message->to($request->email);

            $message->subject('Rekomenciĝado de via pasvorto');
        });
        
        $notification_gobi = array(
            'title' => 'Envoyé',
            'sending' => "Ni retpoŝtis al vi ligilon por restarigi vian pasvorton.",
            'type' => 'success',
    
            );
            return back()->with('message', 'Ni retpoŝtis al vi ligilon por restarigi vian pasvorton.');
        
    }

    public function showResetPasswordForm($token){
        return view('simpleuser.reset-password', ['token' => $token]);
    }

    public function submitResetPasswordForm(Request $request)

     {

         $request->validate([

             'email' => 'required|email|exists:users',

             'password' => 'required|string|min:6|confirmed',

             'password_confirmation' => 'required'

         ]);

         $updatePassword = DB::table('password_resets')

                             ->where([

                               'email' => $request->email, 

                               'token' => $request->token

                             ])

                             ->first();

         if(!$updatePassword){

            $notification_gobi = array(
                'title' => 'Erreur',
                'sending' => "Le token est invalide ou a expiré.",
                'type' => 'warning',
        
                );
                return back()->with('message', 'La ĵetono estas nevalida aŭ eksvalidiĝis. :)');

            // return back()->withInput()->with('error', 'Invalid token!');

         }

         $user = User::where('email', $request->email)

                     ->update(['password' => Hash::make($request->password)]);



         DB::table('password_resets')->where(['email'=> $request->email])->delete();
    
         return redirect('/logon')->with('message', 'Via pasvorto estis sukcese ŝanĝita!');

     }
}
