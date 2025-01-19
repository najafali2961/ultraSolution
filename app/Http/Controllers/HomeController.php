<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeroSection;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch the hero section data from the database
        $hero = HeroSection::first(); // Get the first record from the HeroSection table

        // Pass the variable to the 'frontend.home' view
        return view('frontend.home', compact('hero'));
    }
}
