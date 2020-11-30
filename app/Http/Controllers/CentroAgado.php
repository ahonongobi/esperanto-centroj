<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostAfiche;
use App\Models\UseVideoj;
use App\Models\UserAfishoj;
use App\Models\Comment;
use App\Models\Informoj;
use App\Models\User;
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

         
        
        $allposts = UserAfishoj::where('id_user',$id)->paginate(6,['*'],'agadoj');
        $videos = UseVideoj::where('id_user',$id)->paginate(3,['*'],'vodeo');
        $comments = Comment::where('centre_id',$id)->orderBy('id','desc')->get();
        $Countcomments = Comment::where('centre_id',$id)->orderBy('id','desc')->count();
        $amatoroj = DB::table('likes')
        ->distinct()
        ->where('centre_id',$id)
        ->count('machine');
        $allpost = UserAfishoj::where('id_user',$id)->paginate(1);
       
        $infos = DB::select('SELECT * FROM informojs WHERE id_user= ? ORDER BY id DESC LIMIT 1',[
            $id,
        ]);
        $email = DB::select('SELECT email FROM users WHERE id=?',[
            $id,
        ]);
        
        $respondeculo = DB::select('SELECT * FROM users WHERE id =?',[
            $id,
        ]);
        $countInfo = Informoj::where('id_user',$id)->count();
        return view('simpleuser/centre-info',compact('recentposts','count2','allposts','videos','count3','comments','id','Countcomments','allpost','infos','email','amatoroj','respondeculo','countInfo'));
    }
}
