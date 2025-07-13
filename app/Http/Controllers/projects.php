<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projects extends Controller
{
    public function projects()
    {
        return view('pages.projects');
    }
}
