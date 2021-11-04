<?php

namespace Database\Factories;
use\App\Models\coffee;
use Illuminate\Database\Eloquent\Factories\Factory;

class CoffeeFactory extends Factory
{
    /**
    *The name of the factory's corresponding model.
    *
    * @var string
    */

    protected $models = coffee::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            
            'Nombre del coffee' => $this->faker->name(),
            'Precio' => $this->faker->numberbetween(50, 100)

        ];
    }
}
