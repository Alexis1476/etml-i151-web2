<?php
/**
 * ETML
 * Auteur: David Dieperink, Robustiano Lombardo, Alexis Rojas, Stefan Petrovic
 * Date: 18.05.2022
 * Description: Test fonctionnel
 */

namespace Tests\Browser;

use App\Models\AuthorModel;
use App\Models\CategoryModel;
use App\Models\EditorModel;
use App\Models\UserModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class FonctionnelTest extends DuskTestCase
{
    public function testExample()
    {
        $this->browse(function ($browser) {
            $browser->visit('/')->assertSee('Book');
        });
    }

    public function testExample2()
    {
        $this->browse(function ($browser) {
            $browser->visit('/')->assertSee('Site');
        });
    }

    public function testRegister()
    {
        $this->browse(function ($browser) {
            $browser->visitRoute('bookList')
                ->press('btnRegister')
                ->type('user', 'jess18')
                ->type('password', '00000000')
                ->type('password_confirmation', '00000000')
                ->press('registerSubmit')
                ->assertSee('Login');
        });
    }

    public function testLogin()
    {
        $this->browse(function ($browser) {
            $browser->visitRoute('bookList')
                ->press('Login')
                ->type('userLogin', 'jess18')
                ->type('passwordLogin', '00000000')
                ->press('loginSubmit')
                ->assertSee('jess18');
        });
    }

    public function testAddBook()
    {
        CategoryModel::factory(1)->create();
        AuthorModel::factory(1)->create();
        EditorModel::factory(1)->create();

        $this->browse(function ($browser) {
            $browser->visit('/bookAdd')
                ->type('title', 'New books')
                ->type('numberPages', '150')
                ->select('categories', '1')
                ->select('authors', '1')
                ->select('editors', '1')
                ->type('publishingDate', '10.10.1989')
                ->type('bookPreview', 'https://github.com')
                ->type('resume', 'Je sais pas comment sa fonctionne mais David a bien gérer le truc, bonne chance david')
                ->attach('bookCover', storage_path('../public/img/github-logo.png'))
                ->press('Add book')
                ->assertSee('Site description');
        });
    }
}
