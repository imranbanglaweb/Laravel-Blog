<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logo;

class LogoController extends Controller
{
    public function addLogo(){
    	return view('admin.Logo.add');
    }
    public function CreateLogo(Request $request){
    	$this->validate($request,[
    			'lname'=>'required',
    			'ltitle'=>'required',
    			'llink'=>'required',
    			'limage'=>'required',
    		]);

			$limage=$request->file('limage');
			$name=$limage->getClientOriginalName();
			$UploadPath ='public/Admin/LogoImage/';
			$limage->move($UploadPath,$name);
			$imageUrl =$UploadPath.$name;

    		$logo = New Logo();
    		$logo->lname    = $request->lname;
    		$logo->ltitle = $request->ltitle;
    		$logo->llink  = $request->llink;
    		$logo->limage  = $imageUrl;
    		$logo->save();
    		return redirect('/logo/add')
    		->with('message','Logo Added Successfully');
    }

    public function LogoList(){
    	$Logos = Logo::all();
    	return view('admin.Logo.logolist')
    	->with('Logos',$Logos);
    }
    public function LogoEdit($id) {
    	$logosbyId = Logo::where('id',$id)->first();
    	return view('admin.Logo.logoedit')
    	->with('logosbyId',$logosbyId);
    }

    public function Update(Request $request){
    	$imageUrl = $this->imageExistStatus($request);

    	$logo = Logo::find($request->uId);
		$logo->lname    = $request->lname;
		$logo->ltitle = $request->ltitle;
		$logo->llink  = $request->llink;
		$logo->save();
		flash('Logo Updated Successfully!','success');
		return redirect('/logo/logolist');


    }

    private function imageExistStatus($request) {
        $logoById = Logo::where('id', $request->uId)->first();
        $logoImage = $request->file('teamimage');
        if ($logoImage) {
            unlink($logoById->logoImage);
        $name = $logoImage->getClientOriginalName();
        $uploadPath = 'public/Admin/PostImage/';
            $logoImage->move($uploadPath, $name);
            $imageUrl = $uploadPath . $name;
        } else {
            $imageUrl = $logoById->logoImage;
        }
        return $imageUrl;
    }

    public function Delete($delid){
        $logo = Logo::find($delid);
        $logo->delete();
    return redirect('/logo/logolist')->with('message','Logo Deleted Successfully');
    }
}