<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class HomeController extends Controller
{
  public function dashboard(){
    $posts = Post::where('user_id', '=', auth()->user()->id)->get();
    return view('dashboard',compact('posts'));
  }
   
  public function register(){
    return view('register');
  }
  public function login(){
    return view('login');
  }
}
