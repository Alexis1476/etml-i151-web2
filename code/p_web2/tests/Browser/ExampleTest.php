<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
            $this->browse(function ($browser) {
                $browser->visitRoute('bookList')
                    ->press('Login')
                    ->type('jess18', 'Username')
                    ->type('00000000', 'Password')
                    ->press('Login')
                    ->seePageIs('');
            });
    }
}
