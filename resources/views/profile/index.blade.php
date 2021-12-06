@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 col-md-4 p-5">
            <img src="/img/logo.jpg" style="height: 150px;
    width: 170px; " class='rounded-circle' alt="">
        </div>
        <div class="col-9 col-md-8 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username}}</h1>
                <a href="{{ route('post.create') }}">Add New Post </a>
            </div>
            <div class="d-flex">
                <div class="pr-5"> <strong class=" mr-1">{{$user->posts->count()}}</strong>Post </div>
                <div class="pr-5" > <strong class=" mr-1">23K</strong>followers </div>
                <div class="pr-5" > <strong class=" mr-1">212</strong>following </div>
            </div>
            <div class="pt-4 font-weight-bold "> {{ ucfirst($user->profile->title)}}</div>
            
            <div>{{ ucfirst($user->profile->description)}}</div>
            <div><a href="#">{{  $user->profile->url}}</a> </div>  
        </div>
    </div>
    <div class="row">
    @foreach($user->posts as $post)
    <div class="col-4">
            <img class="w-100 pt-4" src="/storage/{{$post->image}}" alt="image">
        </div>
    @endforeach

       
    </div>
</div>
@endsection
