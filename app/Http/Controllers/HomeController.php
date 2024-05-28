<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHome () {
        $user = auth()->user(); 
        return view('home', ['title'=>'Home','user'=>$user]);
    }
}