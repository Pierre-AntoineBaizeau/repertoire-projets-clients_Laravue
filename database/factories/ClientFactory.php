<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->sentence(3, true),
            'raison_sociale' => $this->faker->company,
            'statut_juridique' => $this->faker->text(5),
            'capital' => $this->faker->numberBetween(10, 100000),
            'numero_siret' => $this->faker->randomNumber(9, true),
            'code_naf' => $this->faker->text(10),
            'pays' => $this->faker->country,
            'adresse' => $this->faker->streetAddress,
            'code_postal' => $this->faker->postcode,
            'ville' => $this->faker->city
        ];
    }
}
