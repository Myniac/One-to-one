<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class FilnFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>  'Films:' . $this->faker->name(),
            'director_id' => $this->faker->unique()->numberBetween(1,25)
        ];
    }
}
