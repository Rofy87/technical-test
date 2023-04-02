<?php

namespace Database\Factories;

use App\Models\Component;
use App\Models\Grade;
use App\Models\Inspection;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inspection>
 */
class InspectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'note' => $this->faker->realText(),
            'inspection_date' => $this->faker->date()
        ];
    }

    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure()
    {
        return $this->afterCreating(function (Inspection $inspection) {

            $grades = Grade::pluck('id')->all();
            $components = Component::where('turbine_id', $inspection->turbine_id)->get();

            $components->each((function($component) use ($inspection, $grades) {

                DB::table('inspection_details')->insert([
                    'inspection_id' => $inspection->id,
                    'grade_id' => $grades[array_rand($grades)],
                    'component_id' => $component->id,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);

            }));

        });
    }
}
