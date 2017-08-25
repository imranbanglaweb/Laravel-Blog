<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
class FrontController extends Controller
{
    public function homeview(){
    	return view('frontEnd.index');
    }
    public function Blogview($id){
    	  $posts = DB::table('posts')
            ->join('categories', 'posts.categoryid', '=', 'categories.id')
            ->select('posts.*', 'categories.cname')
 			->Where('posts.id',$id)->get();
    	return view('frontEnd.Blog.blog')
    	->with('posts',$posts);
    }

   
}
