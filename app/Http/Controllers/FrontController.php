<?php

namespace App\Http\Controllers;

use App\Models\PackageTour;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $packageTour = PackageTour::orderByDesc('id')->take(3)->get();
        return view('front.index', compact('packageTour'));
    }
}
