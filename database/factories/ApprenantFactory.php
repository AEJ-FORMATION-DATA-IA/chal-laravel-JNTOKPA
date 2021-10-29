<?php

namespace Database\Factories;

use App\Models\Apprenant;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApprenantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @return array
     */
    protected $model = Apprenant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName(),
            'mail' => $this->faker->unique()->safeEmail(),
            'groupe' => rand(1, 2),
            'formation_id' => rand(1, 3)
        ];
    }
}
