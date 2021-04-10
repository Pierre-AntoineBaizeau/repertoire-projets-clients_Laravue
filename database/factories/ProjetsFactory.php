<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Projets;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjetsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Projets::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'client_id' => Client::inRandomOrder()->first()->id,
            'nom_responsable' => $this->faker->lastName,
            'prenom_responsable' => $this->faker->firstName,
            'telephone_responsable' => $this->faker->phoneNumber,
            'email_responsable' => $this->faker->email,
            'description' => $this->faker->paragraph(1, true),
            'titre' => $this->faker->words(2, true),
            'start' => $this->faker->date('Y-m-d', '- 1 years'),
            'end' => $this->faker->date('Y-m-d', 'now'),
            'statut_du_projet' => $this->faker->numberBetween(0, 2),
            'nombre_jours_vendus' => $this->faker->numberBetween(0, 100)
        ];
    }
}
