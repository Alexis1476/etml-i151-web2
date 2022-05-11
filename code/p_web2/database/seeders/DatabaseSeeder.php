<?php

namespace Database\Seeders;

use App\Models\AppreciateModel;
use App\Models\AuthorModel;
use App\Models\BookModel;
use App\Models\CategoryModel;
use App\Models\EditorModel;
use App\Models\UserModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        UserModel::factory(10)->create();
        AuthorModel::factory(10)->create();
        EditorModel::factory(10)->create();
        CategoryModel::factory(10)->create();
        BookModel::factory(10)->create();
        AppreciateModel::factory(10)->create();
    }
}
