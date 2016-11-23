<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 100; $i++){
            DB::table('products')->insert([
                'name' => str_random(10),
                'description' => str_random(100),
                'stock' => rand(0, 100),
                'shop_id' => rand(0, 10)
            ]);
        }
    }
}
