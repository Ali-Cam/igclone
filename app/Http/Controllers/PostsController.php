<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Post;
class PostsController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
    }
    public function create(){
         return view('posts/create');
    }
   public function store(){
       $validated= request()->validate([
        'caption' => ['required'],    
        'image' => ['required', 'image'],
       ]);
        $imagePath= request('image')->store('upload', 'public');
        $imag= Image::make(public_path('storage/{$imagePath}')->fit(1200,1000)); 
        auth()->user()->posts()->create([
           'caption'=> $validated['caption'],
           'image'=> $imagePath
       ]);
       return redirect('/profile/'. auth()->user()->id);
   }

   public function show(Post $post){
       return view('posts.show', compact('post'));
   }
}
