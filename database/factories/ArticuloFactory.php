<?php

namespace Database\Factories;

use App\Models\Articulo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Articulo>
 */
class ArticuloFactory extends Factory
{
     /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Articulo::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        // 'codigo' => $this->faker-> sentence(),
        'codigo' => $this->faker-> text(10),
        // 'descripcion' => $this->faker-> paragraph(),
        'descripcion' => $this->faker-> text(45),
        'cantidad' => $this->faker-> randomNumber(3),
        'precio' => $this->faker-> randomFloat(2,1000,50000)
        ];
    }
}
