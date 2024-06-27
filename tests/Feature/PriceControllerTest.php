<?php

namespace Tests\Feature;

use App\Models\Price;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PriceControllerTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_can_display_prices_index()
    {
        Price::factory()->count(5)->create();

        $response = $this->get(route('price.index'));

        $response->assertStatus(200);
        $response->assertViewHas('prices');
    }

    #[Test]
    public function it_can_create_a_price()
    {
        $product = Product::factory()->create();
        $store = Store::factory()->create();
        
        $priceData = [
            'data' => 'Test data',
            'price' => 10.99,
            'presentation' => 'Test presentation',
            'id_product' => $product->id,
            'id_store' => $store->id,
        ];

        $response = $this->post(route('price.store'), $priceData);

        $response->assertRedirect(route('price.index'));
        $this->assertDatabaseHas('prices', $priceData);
    }

    #[Test]
    public function it_can_update_a_price()
    {
        $price = Price::factory()->create();
        $updateData = [
            'data' => 'Updated data',
            'price' => 20.99,
            'presentation' => 'Updated presentation',
        ];

        $response = $this->put(route('price.update', $price->id), $updateData);

        $response->assertRedirect(route('price.index'));
        $this->assertDatabaseHas('prices', array_merge(['id' => $price->id], $updateData));
    }

    #[Test]
    public function it_can_delete_a_price()
    {
        $price = Price::factory()->create();

        $response = $this->delete(route('price.destroy', $price->id));

        $response->assertRedirect(route('price.index'));
        $this->assertDatabaseMissing('prices', ['id' => $price->id]);
    }

    #[Test]
    public function it_can_validate_store_request()
    {
        $response = $this->post(route('price.store'), [
            'data' => '',
            'price' => 'invalid-price',
            'presentation' => '',
            'id_product' => 999, // assuming this id does not exist
            'id_store' => 999, // assuming this id does not exist
        ]);

        $response->assertSessionHasErrors(['data', 'price', 'presentation', 'id_product', 'id_store']);
    }

    #[Test]
    public function it_can_validate_update_request()
    {
        $price = Price::factory()->create();

        $response = $this->put(route('price.update', $price->id), [
            'data' => '',
            'price' => 'invalid-price',
            'presentation' => '',
        ]);

        $response->assertSessionHasErrors(['data', 'price', 'presentation']);
    }
}
