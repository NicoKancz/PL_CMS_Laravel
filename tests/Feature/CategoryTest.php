<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Category;
use App\Models\Language;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_category_can_be_added(){

        $this->withoutExceptionHandling();

        $this->post('/languages', [
            'languageName' => 'PHP',
            'languageAppearance' => 1995,
        ]);

        $response = $this->post('/categories', [
            'categoryName' => 'test',
            'categoryDesc' => 'testing',
            'languageId' => 'PHP',
        ]);

        $response->assertStatus(302);
        $this->assertCount(1, Category::all());
    }
};
