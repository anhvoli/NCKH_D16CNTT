<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
class Dashboard extends Controller
{
    public function __construct()
    {
        
    }
    public function index(){
       return view('fontend.dashboard.index');
    }
}
