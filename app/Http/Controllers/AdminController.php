<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\tbl_pages;
use DB;
class AdminController extends Controller
{
   public function index(){
   	return view('admin.home');
   }

   public function Addpage(){
   	return view('admin.Pages.Add');
   }
   public function CreatePage(Request $request){
   $this->validate($request,[
    			'pagetitle'=>'required',
    			'pagedis'=>'required',
    		]);
   DB::table('tbl_pages')->insert([
    		'pagetitle'=>$request->pagetitle,
    		'pagedis'=>$request->pagedis,

    		]);
    return redirect('/pages/add')->with('message','Pages Added Successfully');

   }

     public function PagesList(){
    	$pages=tbl_pages::all();
return view('admin.Pages.pagelist', ['pages' => $pages]);
    } 
    public function PagesEdit($id){
    $pagesbyId=tbl_pages::where('id',$id)->first();
return view('admin.Pages.editpage',['pagesbyId'=>$pagesbyId]);
    }

   public function PagesUpdate(Request $request){
   	$page = tbl_pages::find($request->uId);
    $page->pagetitle=$request->pagetitle;
    $page->pagedis=$request->pagedis;
    $page->save();
    return redirect('/pages/pagelist')->with('message','Page Updated Successfully');
    }
    public function PagesDelete($id){
    	$page = tbl_pages::find($id);
    	$page->delete();
    return redirect('/pages/pagelist')->with('message','Pages Deleted SUCCESSFULLY');
    }

}
