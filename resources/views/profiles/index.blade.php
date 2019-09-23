@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-4 p-5">
                    <img src="https://instagram.fpnh10-1.fna.fbcdn.net/vp/b49e51a2d5d95b0ac2eb4bb3e69dfb88/5E095E89/t51.2885-19/s150x150/69372869_891990624506790_7812062237408886784_n.jpg?_nc_ht=instagram.fpnh10-1.fna.fbcdn.net" class='rounded-circle'>
                </div>
                <div class="col-8 pt-5">
                    <div class="d-flex justify-content-between align-items-baseline">
                        <h1>{{$user->username}}</h1>
                        <a href="#">Add Post</a>
                        
                    </div>
                    <div class='d-flex'>
                        <div class='pr-5'><strong>16</strong>posts</div>
                        <div class='pr-5'><strong>300</strong>followers</div>
                        <div class='pr-5'><strong>700</strong>followings</div>
                    </div>
                    <div class="pt-5"><strong>{{$user->profile->title}}</strong></div>
                    <div>{{$user->profile->description}}</div>
                    <div><a href="#">{{$user->profile->url}}</a></div>
                </div>
            </div>
        </div>
      </div>

@endsection
