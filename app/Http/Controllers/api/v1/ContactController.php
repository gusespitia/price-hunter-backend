<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;

/**
 * @group Contact Management
 *
 * API endpoints for managing contact messages.
 */
class ContactController extends Controller
{
    /**
     * Store a new contact message.
     *
     * @bodyParam name string required The name of the person sending the message. Example: John Doe
     * @bodyParam email string required The email address of the person sending the message. Example: johndoe@example.com
     * @bodyParam message string required The message content. Example: Hello, I would like to know more about your services.
     *
     * @response 200 {
     *   "message": "Your message has been sent successfully!, we will get back to you shortly"
     * }
     *
     * @response 422 {
     *   "errors": {
     *     "name": ["The name field is required."],
     *     "email": ["The email field is required."],
     *     "message": ["The message field is required."]
     *   }
     * }
     *
     * @response 500 {
     *   "message": "There was an error sending your message. Please try again later."
     * }
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|min:3',
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:10',
        ], [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a string.',
            'name.max' => 'The name must not exceed 255 characters.',
            'name.min' => 'The name must be at least 3 characters.',
            'email.required' => 'The email field is required.',
            'email.email' => 'The email must be a valid email address.',
            'email.max' => 'The email must not exceed 255 characters.',
            'message.required' => 'The message field is required.',
            'message.string' => 'The message must be a string.',
            'message.min' => 'The message must be at least 10 characters.',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        try {
            Contact::create($request->all());
            return response()->json(['message' => 'Your message has been sent successfully!, we will get back to you shortly'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'There was an error sending your message. Please try again later.'], 500);
        }
    }
}
