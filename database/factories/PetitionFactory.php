<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class PetitionFactory extends Factory
{
    
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(6),
            'category' => $this->faker->numberBetween(1,10),
            'description' => $this->faker->text(300),
            'author' => $this->faker->word(2),
            'signess' => $this->faker->numberBetween(1,10),
        ];
    }
}
