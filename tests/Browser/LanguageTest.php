<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LanguageTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser
                //Visit the homepage
                ->visit('/')
                //Press a "Click me" link
                ->clickLink('Click Me')
                //See "You've been clicked, punk"
                ->assertSee("You've been clicked, punk")
                //Assert that the current URL is /feedback
                ->assertPathIs('/feedback');
        });
    }
}
