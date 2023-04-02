<?php

namespace Database\Factories;

use App\Models\Component;
use App\Models\ComponentType;
use App\Models\Farm;
use App\Models\Turbine;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Farm>
 */
class TurbineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
            'farm_id' => Farm::factory(),
        ];
    }

    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure()
    {
        return $this->afterCreating(function (Turbine $turbine) {

            $componentTypes = ComponentType::all();

            foreach($componentTypes as $componentType){
                Component::factory()->create([
                    'turbine_id' => $turbine->id,
                    'component_type_id' => $componentType->id
                ]);
            }

        });
    }
}
