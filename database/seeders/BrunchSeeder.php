<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brunch;

class BrunchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Brunch::create([
            'nom' => 'Brunch Dish 1',
            'description' => 'Delicious brunch with eggs, bacon, and toast.',
            'image' => 'path_to_image.jpg',
        ]);
    }

}
