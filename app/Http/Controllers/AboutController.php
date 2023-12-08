<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    // single action controller used invoke method when creating only one action in controller
    public function __invoke(Request $request)
    {
        return view('home.about');
    }
}
