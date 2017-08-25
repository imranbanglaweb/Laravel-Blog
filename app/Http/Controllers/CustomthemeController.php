<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomthemeController extends Controller
{
    public function fixSidebar(){
    	return view('admin.includes.fixedsidebar');
    }
    public function projects(){
    	return view('admin.includes.projects');
    }
    public function projectsDetails(){
    	return view('admin.includes.projectsdetails');
    }
    public function Contacts(){
    	return view('admin.includes.contacts');
    }
    public function Profile(){
    	return view('admin.includes.profile');
    }
    public function Invoice(){
    	return view('admin.includes.invoice');
    }
    public function Inbox(){
    	return view('admin.includes.inbox');
    }
    public function Table(){
    	return view('admin.includes.table');
    }
    public function Sittings(){
    	return view('admin.includes.sittings');
    }
}
