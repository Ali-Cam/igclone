@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-3 p-5">
                    <img src="/storage/{{$user->profile->image}}" class='rounded-circle w-100'>
                </div>
                <div class="col-9 pt-3">
                    <div class="d-flex justify-content-between align-items-baseline">
                        <h1>{{$user->username}}</h1>
                        @can('update', $user->profile)
                        <a href="/p/create">Add Post</a>
                        @endcan
                    </div>
                    @can('update', $user->profile)
                    <a href="/profile/{{$user->id}}/edit">Edit profile</a>
                    @endcan
                    <div class='d-flex'>
                    <div class='pr-5'><strong>{{$user->posts->count()}}</strong>posts</div>
                        <div class='pr-5'><strong>300</strong>followers</div>
                        <div class='pr-5'><strong>700</strong>followings</div>
                    </div>
                    <div class="pt-5"><strong>{{$user->profile->title}}</strong></div>
                    <div>{{$user->profile->description}}</div>
                    <div><a href="#">{{$user->profile->url}}</a></div>
                </div>
            </div>
            <hr>
            <div class="row pt-5">
                @foreach($user->posts as $post)
                <div class="col-3 pt-3">
                    <a href="/p/{{$post->id}}">
                        <img src="/storage/{{$post->image}}" class="w-100">
                    </a>
                    
                </div>
                @endforeach
            </div>
        </div>
      </div>

@endsection
