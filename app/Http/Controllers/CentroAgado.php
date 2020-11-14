<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostAfiche;
use App\Models\UseVideoj;
use DB;
class CentroAgado extends Controller
{
    //
    public function display($id){
        $recentposts =DB::select("SELECT * FROM post_afiches WHERE id_user = ? ORDER BY id DESC LIMIT 2",[
            $id,
        ]);
       
        $count2 = PostAfiche::where('id_user', $id)->count();
        $count3 = UseVideoj::where('id_user', $id)->count();

        $allposts =DB::select("SELECT * FROM post_afiches WHERE id_user = ?",[
            $id,
        ]);  
        
        $videos = DB::select('SELECT * FROM use_videojs WHERE id_user = ?',[
            $id,
        ]);

        return view('simpleuser/centre-info',compact('recentposts','count2','allposts','videos','count3'));
    }
}
