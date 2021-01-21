<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CollectionsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCollectionsApi()
    {
        $response = $this->withHeaders([
            'X-Secure-Code' => '12345678',
        ])->getJson('api/collections/0');

        $response->assertStatus(200)
        ->assertJsonPath('title','親子步道')
        ->assertJsonStructure([
            'id',
            'title',
            'subTitle',
            'bgColor',
            'iconImage',
            'trails',
            ]);
    }

    public function testCollectionsApiFail()
    {
        $response = $this->getJson('api/collections/0');

        $response->assertStatus(403);
    }
}
