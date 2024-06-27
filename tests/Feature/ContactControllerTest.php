<?php

namespace Tests\Feature;

use App\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;

class ContactControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function it_can_display_contacts_index()
    {
        Contact::factory()->count(5)->create();

        $response = $this->get(route('contacts.index'));

        $response->assertStatus(200);
        $response->assertViewHas('contacts');
    }

    /** @test */
    public function it_can_create_a_contact()
    {
        $contactData = [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'message' => $this->faker->paragraph,
        ];

        $response = $this->post(route('contacts.store'), $contactData);

        $response->assertRedirect(route('contacts.index'));
        $this->assertDatabaseHas('contacts', $contactData);
    }

    /** @test */
    public function it_can_update_a_contact()
    {
        $contact = Contact::factory()->create();
        $updateData = [
            'name' => 'Updated Name',
            'email' => 'updated@example.com',
            'message' => 'Updated message content.',
        ];

        $response = $this->put(route('contacts.update', $contact->id), $updateData);

        $response->assertRedirect(route('contacts.index'));
        $this->assertDatabaseHas('contacts', [
            'id' => $contact->id,
            'name' => 'Updated Name',
            'email' => 'updated@example.com',
            'message' => 'Updated message content.',
        ]);
    }

    /** @test */
    public function it_can_delete_a_contact()
    {
        $contact = Contact::factory()->create();

        $response = $this->delete(route('contacts.destroy', $contact->id));

        $response->assertRedirect(route('contacts.index'));
        $this->assertDatabaseMissing('contacts', ['id' => $contact->id]);
    }

    /** @test */
    public function it_can_validate_store_request()
    {
        $response = $this->post(route('contacts.store'), [
            'name' => '',
            'email' => 'invalid-email',
            'message' => '',
        ]);

        $response->assertSessionHasErrors(['name', 'email', 'message']);
    }

    /** @test */
    public function it_can_validate_update_request()
    {
        $contact = Contact::factory()->create();

        $response = $this->put(route('contacts.update', $contact->id), [
            'name' => '',
            'email' => 'invalid-email',
            'message' => '',
        ]);

        $response->assertSessionHasErrors(['name', 'email', 'message']);
    }
}
