<?php

use Illuminate\Database\Seeder;
use Playground\Gig\Location;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Location::class, 200)->create();
    }
}
