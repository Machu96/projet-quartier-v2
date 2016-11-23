<?php

use Illuminate\Database\Seeder;

class ShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++){
<<<<<<< HEAD
            DB::table('products')->insert([
=======
            DB::table('shops')->insert([
>>>>>>> 412dbba2d832a56426354f7e9c6f7e6adb52bf09
                'name' => str_random(10)
            ]);
        }
    }
}
