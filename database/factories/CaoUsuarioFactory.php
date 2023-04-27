<?php
namespace Database\Factories;

use App\Models\CaoUsuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class CaoUsuarioFactory extends Factory
{
    protected $model = CaoUsuario::class;

    public function definition()
    {
        return [
            // Fill in with the appropriate data for each attribute, e.g.:
            // 'no_usuario' => $this->faker->name,
            // 'no_email' => $this->faker->unique()->safeEmail,
        ];
    }
}
