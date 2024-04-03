<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Http\Models\Funcionario;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Funcionario>
 */
class FuncionarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     *
     * @return array<string, mixed>
     */
    private function ranNum()
    {
        return rand();
    }
    public function definition(): array
    {
        return [
            'nome' => fake()->name(),
            'email'=> fake()->safeEmail(),
            'num_de_telefone' => fake()->phoneNumber(),
            'genero'=>'masculino',
            'idade'=> $this->ranNum(),
        ];
    }
}
