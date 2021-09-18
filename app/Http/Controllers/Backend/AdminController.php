<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getLogin()
    {
        return view('backend.login');
    }
    
    public function getRegis(){
        return view('backend.register');
    }
}
