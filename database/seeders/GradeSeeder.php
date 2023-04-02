<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    public $grades = [
        [
            'named_value' => "Excellent",
            'integer_value' => 1
        ],
        [
            'named_value' => "Good",
            'integer_value' => 2
        ],
        [
            'named_value' => "Fair",
            'integer_value' => 3
        ],
        [
            'named_value' => "Poor",
            'integer_value' => 4
        ],
        [
            'named_value' => "Broken",
            'integer_value' => 5
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->grades as $grade) {
            $grade =Grade::firstOrCreate($grade);
        }
    }
}
