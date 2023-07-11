<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Soldado;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cuartel>
 */
class CuartelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'direccion' => $this->faker->randomElement(),
        ];
    }
}
