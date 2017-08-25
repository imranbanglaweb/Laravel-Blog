<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use DB;
class TeamController extends Controller
{
    public function AddTeam(){
    	return view('admin.Team.add');
    }
    public function TeamCreate(Request $request){
    	$this->validate($request,[
    			'teamtitle'=>'required',
    			'teamsubtitle'=>'required',
    			'teamcontent'=>'required',
    			'teamimage'=>'required',
    		]);

			$teamImage=$request->file('teamimage');
			$name=$teamImage->getClientOriginalName();
			$UploadPath ='public/Admin/PostImage/';
			$teamImage->move($UploadPath,$name);
			$imageUrl =$UploadPath.$name;

    		$team = New Team();
    		$team->teamtitle    = $request->teamtitle;
    		$team->teamsubtitle = $request->teamsubtitle;
    		$team->teamcontent  = $request->teamcontent;
    		$team->teamimage  = $imageUrl;
    		$team->save();
    		return redirect('/team/add')
    		->with('message','Team Added Successfully');
    }

    public function TeamList(){
    	$teams = Team::all();
    	return view('admin.Team.teamlist')
    	->with('teams',$teams);
    }
    public function TeamEdit($teamid) {
    	$teamsbyId = Team::where('id',$teamid)->first();
    	return view('admin.Team.teamedit')
    	->with('teamsbyId',$teamsbyId);
    }

    public function Update(Request $request){
    	$imageUrl = $this->imageExistStatus($request);

    	$team = Team::find($request->uId);
		$team->teamtitle    = $request->teamtitle;
		$team->teamsubtitle = $request->teamsubtitle;
		$team->teamcontent  = $request->teamcontent;
		$team->save();
		return redirect('/team/teamlist')
		->with('message','Team Updated Successfully');


    }

    private function imageExistStatus($request) {
        $teamById = Team::where('id', $request->uId)->first();
        $teamImage = $request->file('teamimage');
        if ($teamImage) {
            unlink($teamById->teamImage);
        $name = $teamImage->getClientOriginalName();
        $uploadPath = 'public/Admin/PostImage/';
            $teamImage->move($uploadPath, $name);
            $imageUrl = $uploadPath . $name;
        } else {
            $imageUrl = $teamById->teamImage;
        }
        return $imageUrl;
    }

    public function Delete($delid){
        $team = Team::find($delid);
        $team->delete();
    return redirect('/team/teamlist')->with('message','Team Deleted Successfully');
    }
}
