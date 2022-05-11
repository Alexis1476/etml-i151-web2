<?php

namespace Database\Factories;

use App\Models\BookModel;
use App\Models\UserModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AppreciateModel>
 */
class AppreciateModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'idBook' => BookModel::all()->random()->idBook,
            'idUser' => UserModel::all()->random()->idUser,
            'appNote' => $this->faker->randomFloat(1,1,5)
        ];
    }
}
