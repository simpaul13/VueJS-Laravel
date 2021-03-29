<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 1; $i <= 100; $i++) {
                Products::create([
                'title' => $faker->name,
                'description' => $faker->word,
            ]);
        }
    }
}
