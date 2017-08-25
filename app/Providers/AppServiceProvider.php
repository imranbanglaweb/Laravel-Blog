<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Category;
use App\Post;
use App\Service;
use App\Team;
use App\Testimonial;
use App\tbl_portfolio;
use App\Contact;
use App\Logo;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
           
    //logo view  
    View::composer('frontEnd.index',function($view){
        $Logos=Logo::where('id',2)->get();
        $view->with('Logos',$Logos);
        }); 


    View::composer('admin.Post.postlist',function($view){
        $categories=Category::all();
        $view->with('categories',$categories);
        });     


    View::composer('frontEnd.Blog.blog',function($view){
        $categories=Category::all();
        $view->with('categories',$categories);
        });


     View::composer('frontEnd.index',function($view){

              $posts = DB::table('posts')
            ->join('categories', 'posts.categoryid', '=', 'categories.id')
            ->select('posts.*', 'categories.cname')
            ->where('posts.status','1')
            ->get();

         $view->with('posts',$posts);


    });

     View::composer('frontEnd.index',function($view){

             $services=Service::all();
         $view->with('services',$services);

    });
        
    
     View::composer('frontEnd.index',function($view){

             $teams = Team::orderBy('id', 'DESC')->get();
         $view->with('teams',$teams);

    });
     View::composer('frontEnd.index',function($view){

             $testimonials = Testimonial::orderBy('id', 'DESC')->get();
         $view->with('testimonials',$testimonials);

    });

     View::composer('frontEnd.index',function($view){

             $portfolios = tbl_portfolio::orderBy('id', 'DESC')->get();
         $view->with('portfolios',$portfolios);

    });
     View::composer('frontEnd.index',function($view){

             $contacts = Contact::orderBy('id', 'DESC')->get();
         $view->with('contacts',$contacts);

    });
        
    
     View::composer('admin.includes.topnav',function($view){

             $contacts = Contact::COUNT('id', 'DESC')
             // ->select('id','id')
             // ->count('id',count('id'))
             ->get();
         $view->with('contacts',$contacts);

    });
        
    }
   

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
