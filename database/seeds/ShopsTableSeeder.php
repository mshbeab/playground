<?php

use Illuminate\Database\Seeder;
use Playground\Shop;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Shop::class, 50)->create();
    }
}
