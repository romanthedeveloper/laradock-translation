<?php

namespace App\Http\Controllers;

use App\User;

class HomeController extends Controller
{
    public function index(){
        $view = User::isAdmin()? 'admin' : 'client';
        return view($view,['name'=> auth()->user()->name]);
    }
}
