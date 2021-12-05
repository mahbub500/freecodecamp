@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 col-md-4 p-5">
            <img src="/img/logo.jpg" style="height: 150px;
    width: 170px; " class='rounded-circle' alt="">
        </div>
        <div class="col-9 col-md-8 pt-5">
            <div><h1>{{ $user->username}}</h1></div>
            <div class="d-flex">
                <div class="pr-5"> <strong class=" mr-1">153</strong>Post </div>
                <div class="pr-5" > <strong class=" mr-1">23K</strong>followers </div>
                <div class="pr-5" > <strong class=" mr-1">212</strong>following </div>
            </div>
            <div class="pt-4 font-weight-bold " >freecodecamp.org</div>
            <div>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis autem sequi, saepe perspiciatis, ratione molestias, delectus veritatis ex reiciendis eos tempora nulla sit quibusdam possimus.</div>
            <div><a href="#">www.freecodecamp.com</a> </div>  
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img class="w-100 pt-4" src="/img/1.jpg" alt="">
        </div>
        <div class="col-4">
            <img class="w-100 pt-4" src="/img/2.jpg" alt="">
        </div>
        <div class="col-4">
            <img class="w-100 pt-4" src="/img/3.jpg" alt="">
        </div>
    </div>
</div>
@endsection
