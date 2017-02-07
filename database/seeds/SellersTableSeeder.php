<?php

use Illuminate\Database\Seeder;
use Playground\Seller;

class SellersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Seller::class, 50)->create();
    }
}
