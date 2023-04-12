<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Colaboradores>
 */
class ColaboradoresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cpf' => $this->faker->numberBetween(1,50),
            'nome' => $this->faker->sentence,
            'email' => $this->faker->words(3, true),
            'telefone' => $this->faker->numberBetween(1,50),
            'endereco' => $this->faker->sentence,
        ];
    }
}
