<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroSectionSeeder extends Seeder
{
    public function run()
    {
        DB::table('hero_sections')->insert([
            'title' => 'Welcome to Our Website',
            'subtitle' => 'Your success starts here',
            'button_text' => 'Get Started',
            'description' => 'This is a description of the hero section.',
            'image_1' => 'hero_images/default_image1.jpg', // Default image path
            'image_2' => 'hero_images/default_image2.jpg', // Default image path
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
