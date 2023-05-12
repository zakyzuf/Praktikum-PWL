<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
        	['name' => 'Toyota FT86',
        	'description' => 'lorem ipsum dolor sit amet, consectetur adipis',
        	'price' => 50000,
        	'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fauto2000.co.id%2Fberita-dan-tips%2Freview-toyota-ft86&psig=AOvVaw2xVP-EumIKzSzEafID54jb&ust=1683617072979000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCOCSz76Y5f4CFQAAAAAdAAAAABAE',
            'created_at' => Carbon::now()],
            ['name' => 'Toyota Supra MK5',
        	'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing',
        	'price' => 500000,
        	'image' => 'https://images.autofun.co.id/file1/cd7a3adff36145998adf243c04228cb7_678x380.jpg',
            'created_at' => Carbon::now()],
            ['name' => 'Toyota GR86',
        	'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing',
        	'price' => 70000,
        	'image' => 'https://www.toyota.astra.co.id/sites/default/files/2022-08/1%20crystal%20white%20pearl.png',
            'created_at' => Carbon::now()]
        ]);
    }
}
