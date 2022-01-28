<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgrammeController extends Controller
{
    // public function programmeInside()
    // {
    //     return view('frontend.programme_2');
    // }
    
    function index() {
        return view('frontend.programmes');
    }
}
