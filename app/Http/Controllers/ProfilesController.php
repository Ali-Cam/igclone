<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\User;
class ProfilesController extends Controller
{
    public function index(User $user)
    {   
        
        return view('profiles/index', compact('user'));
    }

    public function edit(User $user){
        return view("profiles.edit", compact('user'));
    }

    public function update(User $user){
        $this->authorize('update', $user->profile);
        $validated = request()->validate([
            'title'=>['required'],
            'description'=>['required'],
            'url'=>['url'],
            'image'=>''
        ]);
        if(request('image')){
            $imagePath= request('image')->store('profile', 'public');
            $image= Image::make(public_path('storage/{$imagePath}'))->fit(1000,1000);
            $image->save();
        }


        auth()->user()->profile->update(array_merge(
            $validated,
            ['image'=> $imagePath]
        ));
        return redirect('/profile/'. $user->id);
    }
}
