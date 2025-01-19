<?php

namespace App\Http\Controllers\Admin;

use App\Models\HeroSection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HeroSectionController extends Controller
{
    public function edit()
    {
        $hero = HeroSection::first();
        return view('admin.hero.edit', compact('hero'));
    }

    public function update(Request $request)
    {
        // Validate input
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'button_text' => 'required',
            'button_link' => 'required|url',
            'image_1' => 'nullable|image|max:2048', // Max size 2MB
            'image_2' => 'nullable|image|max:2048', // Max size 2MB
        ]);

        $hero = HeroSection::first();

        // Handle image upload
        if ($request->hasFile('image_1')) {
            $image1Path = $request->file('image_1')->store('hero_images', 'public');
            $hero->image_1 = $image1Path; // Save the new path
        }

        if ($request->hasFile('image_2')) {
            $image2Path = $request->file('image_2')->store('hero_images', 'public');
            $hero->image_2 = $image2Path; // Save the new path
        }

        // Update other fields
        $hero->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
        ]);

        return redirect()->back()->with('success', 'Hero section updated successfully');
    }
}
