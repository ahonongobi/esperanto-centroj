<?php

namespace App\Providers;

use App\Models\PostAfiche;
use App\Models\User;
use App\Models\UserAfishoj;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // all center in all view
        View::composer('*', function ($view) {
            $view->with('centroj', User::where('grade', 'admin')->get());
            //select 4 random center
            $view->with('centroj4', User::inRandomOrder()->where('grade', 'admin')->take(4)->get());
            // get 3 last centerpost
            $view->with('last3centerpost', UserAfishoj::orderBy('id', 'desc')->take(3)->get());
            $view->with('last3centeraffiche', PostAfiche::orderBy('id', 'desc')->take(3)->get());
            if(Auth::check()){
                //all posts in table post_afiches where user_id auth id paginated to 10
                $view->with('allposts', PostAfiche::where('key_centre', auth()->user()->key_centre)->orderBy('id', 'desc')->paginate(10));
                // all agadprogramoj in table Centerpost where user_id auth id paginated to 10
                $view->with('allagadprogramoj', UserAfishoj::where('key_centre', auth()->user()->key_centre)->orderBy('id', 'desc')->paginate(10));
            }

        });
        Paginator::useBootstrap();
    }
}
