<?php

namespace App\Http\Controllers\frontent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        
        return view('frontent.index');
    }
    public function about()
    {
        return view('frontent.layout.about');
    }
    public function services()
    {
        return view('frontent.layout.services');
    }
}
