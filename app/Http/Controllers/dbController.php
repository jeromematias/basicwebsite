<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\person;
use Storage;
use file;
use App\jobPost;

class dbController extends Controller
{
    public function index(Request $rq)
    {
    	$users = User::all();
    	return view('welcome')->with(['users'=>$users]);
    }
    public function postJob(Request $rq)
    {        
        return $rq->file("file");
    }
    public function addnew(Request $rq)
    {        

        $this->validate($rq,[
            'name' => 'required|unique:users',
            'email' => 'required|email|unique:users',
        ]);

        $addnew = new User;

        $addnew->name = $rq->username;
        $addnew->email = $rq->email;
        $addnew->password = Hash::make('defaultpassword');
        $addnew->save();

        $users = User::all();

        return view('welcome')->with(['users'=>$users]);
    }

    public function edit(Request $rq)
    {
    	if($rq->update == "view"){
    		$user = User::where('id',$rq->user_id)->first()->get();
    		return view('edit')->with(['user'=>$user]);
    	}else{    		
    		return view('edit')->with(['user'=>'update','update'=>'success']);
    	}    	
    }
    public function upload(Request $rq)
    {
        $name = $rq->file("file")->getClientOriginalName();
        Storage::disk("public")->put("profile/asasd/$name",file_get_contents($rq->file("file")));                
        return $rq->file("file");
    }


    /*Angular*/ 
    public function angularjs()
    {
        return view('angularJs');
    }


    public function postreq(Request $rq)
    {
        $person = new person;
        $person->name = $rq->name;
        $person->address = $rq->address;
        $person->age = $rq->age;
        $person->save();
        
        return person::all();
      
    }
    public function JobPost(Request $rq){

        $jobpost = new jobPost;
        $jobpost->job_title = $rq->jobTitle;
        $jobpost->company_name = $rq->companyName;
        $jobpost->job_description = $rq->jobDescription;
        $jobpost->location = $rq->jobLocation;
        $jobpost->save();
        return "success";
    }
    public function jobList(){
        return jobPost::all();
    }
}
