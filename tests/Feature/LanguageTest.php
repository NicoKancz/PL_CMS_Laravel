<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Language;

class LanguageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_language_can_be_added_to_main(){

        $this->withoutExceptionHandling();

        $response = $this->post('/languages', [
            'languageName' => 'Perl',
            'languageAppearance' => 1987,
        ]);

        $response->assertOk();
        $this->assertCount(1, Language::all());
    }

    /** @test */
    public function a_name_is_required(){

        $response = $this->post('/languages', [
            'languageName' => '',
            'languageAppearance' => 1987,
        ]);

        $response->assertSessionHasErrors('languageName');
    }

    /** @test */
    public function a_appearance_is_required(){

        $response = $this->post('/languages', [
            'languageName' => 'Perl',
            'languageAppearance' => null,
        ]);

        $response->assertSessionHasErrors('languageAppearance');
    }

    /** @test */
    public function a_language_can_be_updated(){

        $this->withoutExceptionHandling();

        $this->post('/languages', [
            'languageName' => 'Perl',
            'languageAppearance' => 1987,
        ]);

        var_dump($language = Language::first());
        var_dump($language->languageId);

        $response = $this->post('/languages/' . $language->languageId, [
            'languageName' => 'C#',
            'languageAppearance' => 2001,
        ]);

        $this->assertEquals('C#', $language->languageName);
        $this->assertEquals(2001, $language->languageAppearance);
    }
};
