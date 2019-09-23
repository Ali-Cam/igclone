<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create(){
         return view('posts/create');
    }
   public function store(){
       $validated= request()->validate([
        'caption' => ['required'],    
        'image' => ['required']
       ]);
       return dd('hi');
   }
}
