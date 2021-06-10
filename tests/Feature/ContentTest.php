<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Category;
use App\Models\Content;

class ContentTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_content_can_be_added(){

        $this->withoutExceptionHandling();

        $this->post('/languages', [
            'languageName' => 'PHP',
            'languageAppearance' => 1995,
        ]);

        $this->post('/categories', [
            'categoryName' => 'News',
            'categoryDesc' => 'testing',
            'languageId' => 'PHP',
        ]);

        $this->post('/users', [
            'categoryName' => 'News',
            'categoryDesc' => 'testing',
            'languageId' => 'PHP',
        ]);

        $response = $this->post('/contents', [
            'contentName' => 'test',
            'contentDesc' => 'testing',
            'contentType' => 'testing',
            'contentImage' => 'testing',
            'categoryId' => 'News',
            'userId' => 'Nico',
        ]);

        $response->assertStatus(302);
        $this->assertCount(1, Content::all());
    }
};
