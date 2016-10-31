<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Configuration extends Controller
{
    public function index(Request $request)
    {
        
        \Session::set('locale', request('locale'));  
         return \Redirect::back()->withInput();

    }
}
