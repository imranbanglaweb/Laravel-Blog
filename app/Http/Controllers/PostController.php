<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use App\Post;
use DB;

class PostController extends Controller
{
    // SHOW VALUE
    public function PostList(){

              $posts = DB::table('posts')
            ->join('categories', 'posts.categoryid', '=', 'categories.id')
            ->select('posts.*', 'categories.cname')
            // ->where('posts.id',2)
            ->get();

        return view('admin.Post.postlist',['posts'=>$posts]);

        }
        // SHOW VALUE
    public function PostGet($id)
        {
    $post = Post::find($id);
    return response()->json($post);
        }
        // INSERT
     public function PostCreate(Request $request)
        {

          $postImage=$request->file('image');
          $name=$postImage->getClientOriginalName();
          $UploadPath ='public/Admin/PostImage/';
          $postImage->move($UploadPath,$name);
          $imageUrl =$UploadPath.$name;

        $post= New Post();
        $post->ptitle = $request->ptitle;
        $post->categoryid=$request->categoryid;
        $post->pcontent=$request->pcontent;
        $post->ptag=$request->ptag;
        $post->status=$request->status;
        $post->image=$imageUrl;
        $post->save();
             return response()->json($post);
         } 

         // UPDATE
    public function PostPut(Request $request ,$id)
        {
   
    $post = Post::find($request->$id);
    $post->ptitle = $request->ptitle;
    $post->categoryid = $request->categoryid;
    $post->pcontent = $request->pcontent;
    $post->ptag = $request->ptag;

    $post->save();
    return response()->json($post);
        }


    // private function imageExistStatus($request) {


    //     $postbyid = Post::where('id', $request->id)->first();
    //     $postImage = $request->file('image');
    //     if ($postImage) {
    //         unlink($postbyid->postImage);
    //     $name = $postImage->getClientOriginalName();
    //     $UploadPath ='public/Admin/PostImage/';
    //     $postImage->move($uploadPath, $name);
    //     $imageUrl = $uploadPath . $name;
    //     } else {
    //         $imageUrl = $postbyid->postImage;
    //     }
    //     return $imageUrl;
    // }


  

    // DELETE
    public function PostDelete($id)
         {
   $post = Post::destroy($id);
    return response()->json($post);
    }



}