<?php

namespace Database\Factories;
use\App\Models\proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProveedorFactory extends Factory
{
    /**
    *The name of the factory's corresponding model.
    *
    * @var string
    */


    protected $models = proveedor::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'Nombre del Proveedor' => $this->faker->name,
            'Compania' => $this->faker->Company,
            'Telefono' => $this->faker->PhoneNumber
        ];
    }
}
