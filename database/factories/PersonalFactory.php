<?php

namespace Database\Factories;

use App\Models\Personal;
use Illuminate\Database\Eloquent\Factories\Factory;

// use Illuminate\Support\Str;
// use Laravel\Jetstream\Features;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personal>
 */
class PersonalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'legajo' => $this->faker->numberBetween(500,6000),
        'apellido' => $this->faker->firstName(),
        'nombres' => $this->faker->lastName(),
        'documento_tipo_id' => $this->faker->randomDigitNotNull(),
        'documento_numero' => $this->faker->numberBetween(10000000,35000000),
        'cuil' => $this->faker->numerify('##-########-#'),
        'telefono1' => $this->faker->phoneNumber(),
        'telefono2' => $this->faker->phoneNumber(),
        'correo' => $this->faker->email(),
        'ninicial' => $this->faker->numberBetween(0,1),
        'nprimario' => $this->faker->numberBetween(0,1),
        'nmedio' => $this->faker->numberBetween(0,1),
        'nespecial' => $this->faker->numberBetween(0,1),
        'nadmin' => $this->faker->numberBetween(0,1),
        'fecha_nacimiento' => $this->faker->date(),
        'fecha_alta' => $this->faker->date(),
        'fecha_baja' => $this->faker->date(),
        'calle_nombre' => $this->faker->streetName(),
        'calle_numero' => $this->faker->buildingNumber(),
        'codigo_postal' => $this->faker->postcode(),
        'barrio_id' => $this->faker->numberBetween(1,500),
        'localidad_id' => $this->faker->numberBetween(1,425),
        'provincia_id' => $this->faker->numberBetween(1,25),
        'domicilio_emergencia' => $this->faker->streetAddress(),
        'obra_social_id' => $this->faker->numberBetween(1,260),
        'servicio_emergencia' => $this->faker->company(),
        'telefono_servicio_emergencia' => $this->faker->phoneNumber(),
        'categoria' => $this->faker->randomElement(['DOCENTE', 'NO DOCENTE']),
        'status' => $this->faker->randomElement(['FP', 'PP']),
        'apto' => $this->faker->randomElement(['APTO', 'NO APTO', 'SIN APTO']),
        'apto_fecha' => $this->faker->date(),
        'seguro' => $this->faker->randomElement(['SI', 'NO']),
        ];
    }
}
