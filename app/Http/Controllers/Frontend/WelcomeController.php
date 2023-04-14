<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index(){
        $especiales = Category::where('name', 'especiales')->first();

        return view('welcome', compact('especiales'));
    }

    public function thankyou(){
        return view('thankyou');
    }
}
