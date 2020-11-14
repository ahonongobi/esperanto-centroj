<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\membroj;
use App\Models\Informoj;
use App\Models\User;
use Image;
use Illuminate\Support\Facades\Auth;

class MembrojController extends Controller
{
    //
    public function membroj(Request $req){
        $eror = request()->validate([
            'name'=>['required','string'],
            'surname'=>['required','string'],
            'numero'=>['required','string'],
            'email'=>['required','email'],
            'file'=>['required','image'],
        ]);
            if($eror){
                $notification = array(
                    'message'=>'Bonvolu bone plenigi la formularon amiko.',
                    'alert-type'=>'warning'
                   );
                return back()->with($notification);
            } 

            $membroj = new membroj();
            $membroj->id_user = Auth::user()->id;
            $membroj->center = Auth::user()->centro;
            $membroj->name = $req->name;
            $membroj->surname=$req->surname;
            $membroj->email = $req->email;
            
            if($req->hasFile('file')){
                $file1 = $req->file('file');
    
                $filename1 = 2*time().'.'.$file1->getClientOriginalExtension();
                Image::make($file1)->save(public_path('/storage/actuality_photos/' .$filename1));
    
                $membroj->photo = $filename1;
             }
    
             $membroj ->save();
    
             $notification = array(
                'message'=>'Via agado estas bone publikitaj',
                'alert-type'=>'success'
               );
            return back()->with($notification);
            
    }
    public function indexInfor(){
        return view('respondeculo/gravaj');
    }


    public function informoj(Request $req2){
        request()->validate([
            'name'=>['required','string'],
            'lieu'=>['required','string'],
            'bibliothque'=>['required','string'],
            'mangheblo'=>['required','string'],
            'libroservo'=>['required','string'],
            'dormeblo'=>['dormeblo','string'],
            'kursejoklasochambro'=>['required','string'],
            'jaro'=>['required','string'],
            'Telefono'=>['required','string'],
            'trajto'=>['required','string'],
            'agado'=>['required','string'],
            'Kontaktadreso'=>['required','string'],
            'retejo'=>['required','string'],
        ]);

        $informoj = new Informoj();
        $informoj->id_user = Auth::user()->id;
        $informoj->center = Auth::user()->centro;
        $informoj->name = $req2->name;
        $informoj->lokejo = $req2->lieu;

        $informoj->bibliothque = $req2->bibliothque;
        $informoj->mangheblo = $req2->mangheblo;
        $informoj->libroservo = $req2->libroservo;
        $informoj->dormeblo = $req2->domo;
        $informoj->kursejoklasochambro = $req2->kursejoklasochambro;
        $informoj->jaro = $req2->jaro;
        $informoj->Telefono = $req2->Telefono;
        $informoj->trajto = $req2->trajto;
        $informoj->agado = $req2->agado;
        $informoj->Kontaktadreso = $req2->Kontaktadreso;
        $informoj->retejo = $req2->retejo;
        
        $informoj->save();
        
        $notification = array(
            'message'=>'Via agado estas bone publikitaj',
            'alert-type'=>'success'
           );
        return back()->with($notification);
    }

}
