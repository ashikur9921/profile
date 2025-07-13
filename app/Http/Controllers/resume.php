<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resume extends Controller
{
    public function resume()
    {
        return view('pages.resume');
    }
}
