<?php

use Illuminate\Database\Seeder;
use \App\Place;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Place::class, 1)->create();
    }
}
