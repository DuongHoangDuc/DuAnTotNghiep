<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Middleware\AuthAdmin;
class DashboardController extends Controller
{

    // public function __construct(){
    //     $this->middleware('authadmin');
    // }

    public function index()
    {
        // dd(auth()->user());
        return view('backend.dashboard.index');
        
    }
}
;