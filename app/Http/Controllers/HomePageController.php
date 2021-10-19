<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function landing()
    {
        return view('landing');
    }

    public function booking()
    {
        return view('booking');
    }

    public function reserve(Request $request)
    {
        dump($request->all());
    }
}
