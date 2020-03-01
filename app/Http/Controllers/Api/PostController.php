<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //
    public function index(){

    } 
     public function all(){
    	$post= Post::all();
    	return $post;
    }
     public function self(){
    	$user=$this->authUser();
    	$posts= auth()->user()->posts;
    // dd($post);
    	
    	return $user->posts;
    	// return $post;

    	// $post= Post::all();
    	// return $post;
    }
    public function store(Request $request){
    	// return $request;
    	$details=$request->only(['title','subject','description']);
    		$user=$this->authUser();
    	$post=$user->posts()->create($details);

    	return $post;
    }
}
