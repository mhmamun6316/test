<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function sustainability()
    {
        return view('frontend.sustainability');
    }

    public function ethicalSourcing()
    {
        return view('frontend.ethical-sourcing');
    }

    public function manufacturingExcellence()
    {
        return view('frontend.manufacturing-excellence');
    }

    public function category($slug = null)
    {
        return view('frontend.category', compact('slug'));
    }
}
