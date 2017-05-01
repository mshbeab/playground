<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(SellersTableSeeder::class);
         $this->call(ShopsTableSeeder::class);
         $this->call(GigsTableSeeder::class);
         $this->call(GigImagesTableSeeder::class);
         $this->call(LocationsTableSeeder::class);
    }
}
