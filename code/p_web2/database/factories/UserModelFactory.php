<?php
/**
 * ETML
 * Auteur: David Dieperink, Robustiano Lombardo, Alexis Rojas, Stefan Petrovic
 * Date: 18.05.2022
 * Description: Factories pour le model des utilisateurs
 */

namespace Database\Factories;

use App\Models\UserModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserModel>
 */
class UserModelFactory extends Factory
{
    protected $model = UserModel::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws \Exception
     */
    public function definition()
    {
        return [
            'useNickname' => $this->faker->unique()->userName(),
            'usePassword' => bcrypt('00000000'),
            'useCreateAt' => now(),
            'useNbBooks' => 0,
            'useNbAppreciation' => 0,
            'useAdmin' => $this->faker->numberBetween(0,1)
        ];
    }
}
