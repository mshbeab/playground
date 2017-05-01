<?php

use Illuminate\Database\Seeder;
use Playground\Gig\Image;

class GigImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Image::class, 100)->create();
    }
}
