<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empresa>
 */
class EmpresaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cnpj' => $this->faker->unique()->numberBetween(1,100),
            'nome' => $this->faker->sentence,
            'email' => $this->faker->words(3, true),
            'telefone' => $this->faker->unique()->numberBetween(1,100),
            'endereco' => $this->faker->sentence,
        ];
    }
}
