<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Text;
use DB;
use App\tbl_portfolio;


class PortfolioController extends Controller
{
    public function add(){
    	return view('admin.Portfolio.add');
    }
    public function create(Request $request){
    	$this->validate($request,[
            'title'=>'required',
            'discription'=>'required',
            'link'=>'required',

            ]);
    
    $portfolioimage=$request->file('image');
    $name=$portfolioimage->getClientOriginalName();
    $UploadPath ='public/FrontEnd/PortfolioImage/';
    $portfolioimage->move($UploadPath,$name);
    $imageUrl =$UploadPath.$name;

    	$portfolio = New tbl_portfolio();

    	$portfolio->title = $request->title;
        $portfolio->discription=$request->discription;
    	$portfolio->link=$request->link;
    	$portfolio->image=$imageUrl;
    	$portfolio->save();
    	return redirect('/Portfolio/add')->with('message','Portfolio Added Successfully');
    }


    public function show(Request $request){
        $portfolios = tbl_portfolio::all();
        return view('admin.Portfolio.all',['portfolios'=>$portfolios]);
    }
      public function edit($id){
    $portfolioById=tbl_portfolio::where('id',$id)->first();
return view('admin.Portfolio.edit')
        ->with('portfolioById',$portfolioById);
    }


   
    public function update(Request $request) {
        $imageUrl = $this->imageExistStatus($request);
        $portfolio = tbl_portfolio::find($request->uid);
        $portfolio->title=$request->title;
        $portfolio->discription=$request->discription;
        $portfolio->link=$request->link;
        $portfolio->save();
        return redirect('/Portfolio/all')->with('message','Portfolio UPDATED SUCCESSFULLY');


    }
    private function imageExistStatus($request) {
        $portfolioById = tbl_portfolio::where('id', $request->uid)->first();
        $pportfolioImage = $request->file('image');
        if ($pportfolioImage) {
            unlink($portfolioById->pportfolioImage);
        $name = $portfolioImage->getClientOriginalName();
        $uploadPath = 'public/FrontEnd/PortfolioImage/';
            $portfolioImage->move($uploadPath, $name);
            $imageUrl = $uploadPath . $name;
        } else {
            $imageUrl = $portfolioById->portfolioImage;
        }
        return $imageUrl;
    }

    public function delete($id){
        $portfolioBydId=tbl_portfolio::find($id);
        $portfolioBydId->delete();
    return redirect('/Portfolio/all')->with('message','Portfolio Deleted SUCCESSFULLY');
    }


}

