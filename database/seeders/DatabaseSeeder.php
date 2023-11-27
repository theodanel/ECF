<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Matela;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $matelas = Matela::factory()->create([
            'name' => 'Matelas Confort',
            'brand' => 'EPEDA',
            'price' => 529,
            'discount' => 20,
            'height' => '90x190',
            'image' => 'https://m.media-amazon.com/images/I/61tVWFqkTfL._AC_SX569_.jpg',
    
        ]);
        
    }
}
