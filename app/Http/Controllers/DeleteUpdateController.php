<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UseVideoj;
class DeleteUpdateController extends Controller
{
    //
    public function delete($id){
        $delete =  UseVideoj::find($id);
        $delete->delete();
        return back();
    }
}
