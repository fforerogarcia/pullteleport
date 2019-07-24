<?php

use Illuminate\Database\Seeder;
use App\Models\Ciudade;

class CiudadeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Ciudade::class)->create();
    }
};
