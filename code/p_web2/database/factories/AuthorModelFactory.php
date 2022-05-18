<?php
/**
 * ETML
 * Auteur: David Dieperink, Robustiano Lombardo, Alexis Rojas, Stefan Petrovic
 * Date: 18.05.2022
 * Description: Factories pour le model des auteurs
 */

namespace Database\Factories;

use App\Models\AuthorModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AuthorModel>
 */
class AuthorModelFactory extends Factory
{
    protected $model = AuthorModel::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'autFirstName' => $this->faker->firstName(),
            'autLastName' => $this->faker->lastName()
        ];
    }
}
