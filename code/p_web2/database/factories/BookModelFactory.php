<?php

namespace Database\Factories;

use App\Models\AuthorModel;
use App\Models\CategoryModel;
use App\Models\EditorModel;
use App\Models\UserModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookModel>
 */
class BookModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'booTitle' => $this->faker->sentence(4),
            'booNbPages'=>$this->faker->numberBetween(50,1500),
            'booPreview' => $this->faker->imageUrl(),
            'booResume' => $this->faker->text(),
            'booPublishingDate' => $this->faker->date(),
            'booNoteAverage' => 0,
            'booCoverName' => 'bookCovers/Couverture.png',
            'idAuthor' => AuthorModel::all()->random()->idAuthor,
            'idEditor' => EditorModel::all()->random()->idEditor,
            'idCategory' => CategoryModel::all()->random()->idCategory,
            'idUser'=> UserModel::all()->random()->idUser
        ];
    }
}
