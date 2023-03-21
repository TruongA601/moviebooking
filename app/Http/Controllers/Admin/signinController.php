<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;


class signinController extends Controller
{
    public function signin(){
        return view('public.signin');
    }
}
