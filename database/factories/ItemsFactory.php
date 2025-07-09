<?php

namespace Database\Factories;

use App\Models\Items;
use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    protected $model = Items::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->itemsTitle,
            'salary' => $this->faker->numberBetween(15000, 80000),
            'employer_id' => Employer::factory(),
        ];
    }
}
