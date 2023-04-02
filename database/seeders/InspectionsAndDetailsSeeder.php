<?php

namespace Database\Seeders;

use App\Models\Farm;
use App\Models\Inspection;
use App\Models\Turbine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InspectionsAndDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $turbines = Turbine::all()->random(4);
        $turbines->each((function($turbine)  {
            Inspection::factory()->create(['turbine_id' => $turbine->id]);
        }));

    }


}
