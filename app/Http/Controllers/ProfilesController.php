<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)

    {
        // dd($user);
       $user = User::findOrfail($user);
        return view('profile.index',[
            'user'=>$user,
        ]);
    }
    
}
