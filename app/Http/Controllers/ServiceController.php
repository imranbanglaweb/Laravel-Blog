<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Service;
use DB;

class ServiceController extends Controller
{

    public function Serviceview()
        {
    // $categories = Category::all();
$service = Service::orderBy('id', 'DESC')->get();
    return view('admin.Service.service')
    ->with('service',$service);
        }

    public function ServiceGet($id)
        {
    $service = Service::find($id);
    return response()->json($service);
        }

     public function ServiceCreate(Request $request)
        {
    $service =Service::create($request->input());
    return response()->json($service);
         } 
         
    public function ServicePut(Request $request,$id)
        {
    $service = Service::find($id);
    $service->stitle = $request->stitle;
    $service->scontent = $request->scontent;
    $service->sicon = $request->sicon;
    $service->save();
    return response()->json($service);
        }
    public function ServiceDelete($id)
         {
   $service = Service::destroy($id);
    return response()->json($service);
    }



}