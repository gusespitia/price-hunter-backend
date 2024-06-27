<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;

class CategoryControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function it_can_display_categories_index()
    {
        Category::factory()->count(5)->create();

        $response = $this->get(route('category.index'));

        $response->assertStatus(200);
        $response->assertViewHas('categories');
    }

    /** @test */
    public function it_can_create_a_category()
    {
        $categoryData = [
            'name' => $this->faker->word,
            'status' => true,
        ];

        $response = $this->post(route('category.store'), $categoryData);

        $response->assertRedirect(route('category.index'));
        $this->assertDatabaseHas('categories', $categoryData);
    }

    /** @test */
    public function it_can_update_a_category()
    {
        $category = Category::factory()->create();
        $updateData = [
            'name' => 'Updated Name',
            'status' => false,
        ];

        $response = $this->put(route('category.update', $category->id), $updateData);

        $response->assertRedirect(route('category.index'));
        $this->assertDatabaseHas('categories', [
            'id' => $category->id,
            'name' => 'Updated Name',
            'status' => false,
        ]);
    }

    /** @test */
    public function it_can_delete_a_category()
    {
        $category = Category::factory()->create();

        $response = $this->delete(route('category.destroy', $category->id));

        $response->assertRedirect(route('category.index'));
        $this->assertDatabaseMissing('categories', ['id' => $category->id]);
    }

    /** @test */
    public function it_can_validate_store_request()
    {
        $response = $this->post(route('category.store'), [
            'name' => '',
        ]);

        $response->assertSessionHasErrors(['name']);
    }

    /** @test */
    public function it_can_validate_update_request()
    {
        $category = Category::factory()->create();

        $response = $this->put(route('category.update', $category->id), [
            'name' => '',
        ]);

        $response->assertSessionHasErrors(['name']);
    }
}
