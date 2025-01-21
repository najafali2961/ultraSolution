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

            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
