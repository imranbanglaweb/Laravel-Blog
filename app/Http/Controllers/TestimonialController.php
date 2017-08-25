<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;
use DB;

class TestimonialController extends Controller
{
    public function AddTes(){
    	return view('admin.Testimonials.add');
    }
    public function TesCreate(Request $request){
    	$this->validate($request,[
    			'tname'=>'required',
    			'tcontent'=>'required',
    			'timage'=>'required',
    		]);

			$tImage=$request->file('timage');
			$name=$tImage->getClientOriginalName();
			$UploadPath ='public/Admin/PostImage/';
			$tImage->move($UploadPath,$name);
			$imageUrl =$UploadPath.$name;

    		$testimonials = New Testimonial();
    		$testimonials->tname    = $request->tname;
    		$testimonials->tcontent = $request->tcontent;
    		$testimonials->timage  = $imageUrl;
    		$testimonials->save();
    		return redirect('testimonials/add')
    		->with('message','Testimonials Added Successfully');
    }
    public function TesList(){
    	 $testimonials = Testimonial::orderBy('id', 'DESC')->get();
    	 return view('admin.Testimonials.testimonialslist')
    	 ->with('testimonials',$testimonials);
    }

     public function TesEdit($tid) {
    	$tbyId = Testimonial::where('id',$tid)->first();
    	return view('admin.Testimonials.tedit')
    	->with('tbyId',$tbyId);
    }


    public function Update(Request $request){
    	$imageUrl = $this->imageExistStatus($request);

    	$testimonials = Testimonial::find($request->tId);
		$testimonials->tname    = $request->tname;
		$testimonials->tcontent  = $request->tcontent;
		$testimonials->save();

		return redirect('/testimonials/testimonialslist')
		->with('message','Testimonials Updated Successfully');


    }

    private function imageExistStatus($request) {
        $tById = Testimonial::where('id', $request->tId)->first();
        $tImage = $request->file('timage');
        if ($tImage) {
            unlink($tById->tImage);
        $name = $tImage->getClientOriginalName();
        $uploadPath = 'public/Admin/PostImage/';
            $tImage->move($uploadPath, $name);
            $imageUrl = $uploadPath . $name;
        } else {
            $imageUrl = $tById->tImage;
        }
        return $imageUrl;
    }

    public function Delete($delid){
        $testimonials = Testimonial::find($delid);
        $testimonials->delete();
    return redirect('/testimonials/testimonialslist')
    ->with('message','Testimonial Deleted Successfully');
    }

}
