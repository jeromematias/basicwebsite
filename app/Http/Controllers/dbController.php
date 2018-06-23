<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class dbController extends Controller
{
    public function index()
    {
    	$users = User::all();
    	return view('welcome')->with(compact('users'));
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
}
