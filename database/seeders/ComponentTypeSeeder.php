<?php

namespace Database\Seeders;

use App\Models\ComponentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComponentTypeSeeder extends Seeder
{
    public $types = [
        ['name' => "Blade"],
        ['name' => "Rotor"],
        ['name' => "Hub"],
        ['name' => "Generator"],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->types as $type) {
            $type =ComponentType::firstOrCreate($type);
        }
    }
}
