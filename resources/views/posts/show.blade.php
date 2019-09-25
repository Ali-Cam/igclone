@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="/storage/{{$post->image}}" class="w-100" style="width: 50px;">
            </div>
            <div class="col-6">
                <div>
                    <div class="d-flex align-items-center">
                        <div>
                            <img src="/storage/{{$post->user->profile->image}}" class="rounded-circle w-100"style="max-width: 40px;">
                        </div>
                        <div class="pl-3">
                            <h6 class="font-weight-bold"><a href="/profile/{{$post->user->id}}" style="text-decoration:none; color:black;">{{$post->user->username}}</a></h6>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex align-items-center pb-3">
                        <div>
                            <img src="/storage/{{$post->user->profile->image}}" class="rounded-circle w-100"style="max-width: 40px;">
                        </div>
                        <div class="pr-1 pl-3"><strong><a href="/profile/{{$post->user->id}}"  style="text-decoration:none; color:black;">{{$post->user->username}}</a></strong></div>
                        <div>{{$post->caption}}</div>
                        
                    </div>
                    @include('timeStamp')
                </div>
            </div>
        </div>
    </div>
@endsection