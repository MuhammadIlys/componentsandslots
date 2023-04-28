<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function test(){
        $pagename = 'Test';
        return view('test', compact('pagename'));
    }

    public function about(){
        $pagename = 'About';
        return view('about',compact('pagename'));
    }
}
