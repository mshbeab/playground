<?php

use Illuminate\Database\Seeder;
use Playground\Gig;

class GigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Gig::class, 300)->create();
    }
}
