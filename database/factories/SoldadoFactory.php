<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\models\soldado;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Soldado>
 */
 class SoldadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'nombre'=> $this->faker->name(),
            'edad' =>$this->faker->randomElement(['18', '19', '20']),
        ];
    }
}
