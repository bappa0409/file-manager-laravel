<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RakibDevs\Weather\Weather;

class SiteController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }
}
