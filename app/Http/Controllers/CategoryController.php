<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use DB;

class CategoryController extends Controller
{

    public function categoryList()
        {
    // $categories = Category::all();
$categories = Category::orderBy('id', 'DESC')->get();
    return view('admin.Category.categoryList')
    ->with('categories',$categories);
        }

    public function categoryGet($id)
        {
    $category = Category::find($id);
    return response()->json($category);
        }

     public function categoryCreate(Request $request)
        {
    $category =Category::create($request->input());
    return response()->json($category);
         } 
         
    public function categoryPut(Request $request,$id)
        {
    $category = Category::find($id);
    $category->cname = $request->cname;
    $category->cdis = $request->cdis;
    $category->cslug = $request->cslug;
    $category->save();
    return response()->json($category);
        }
    public function categoryDelete($id)
         {
   $category = Category::destroy($id);
    return response()->json($category);
    }



}