<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class CustomerAuthController extends Controller
{
    /**
     * Register a new customer.
     *
     * @group Customer Auth
     *
     * @bodyParam name string required The name of the customer. Example: John Doe
     * @bodyParam email string required The email of the customer. Example: johndoe@example.com
     * @bodyParam password string required The password for the customer. Example: secret
     * @bodyParam password_confirmation string required The confirmation for the password. Example: secret
     *
     * @response 201 {
     *     "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9...",
     *     "token_type": "bearer",
     *     "expires_in": 3600
     * }
     * @response 422 {
     *     "message": "Validation error",
     *     "errors": {
     *         "email": ["The email has already been taken."]
     *     }
     * }
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|min:2',
            'email' => 'required|string|email|max:255|unique:customers',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $customer = Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = auth('customer-api')->login($customer);

        return $this->respondWithToken($token);
    }

    /**
     * Login a customer.
     *
     * @group Customer Auth
     *
     * @bodyParam email string required The email of the customer. Example: johndoe@example.com
     * @bodyParam password string required The password for the customer. Example: secret
     *
     * @response 200 {
     *     "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9...",
     *     "token_type": "bearer",
     *     "expires_in": 3600
     * }
     * @response 401 {
     *     "message": "Invalid credentials"
     * }
     * @response 404 {
     *     "message": "Email not registered"
     * }
     */
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
    
        $customer = Customer::where('email', $request->email)->first();
        if (!$customer) {
            return response()->json(['message' => 'User not found, Please create an account!.'], 404);
        }
    
        if (!Hash::check($request->password, $customer->password)) {
            return response()->json(['message' => 'Incorrect password, Please try again!.'], 401);
        }
    
        if (!$token = auth('customer-api')->attempt($credentials)) {
            return response()->json(['message' => 'Invalid credentials, Please try again!.'], 401);
        }
    
        return $this->respondWithToken($token);
    }
    
    
    

    /**
     * Get the authenticated customer.
     *
     * @group Customer Auth
     *
     * @response 200 {
     *     "id": 1,
     *     "name": "John Doe",
     *     "email": "johndoe@example.com",
     *     "created_at": "2021-09-15T14:59:48.000000Z",
     *     "updated_at": "2021-09-15T14:59:48.000000Z"
     * }
     */
    public function me()
    {
        return response()->json(auth('customer-api')->user());
    }

    /**
     * Logout the authenticated customer.
     *
     * @group Customer Auth
     *
     * @response 200 {
     *     "message": "Successfully logged out"
     * }
     */
    public function logout()
    {
        auth('customer-api')->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh the authentication token.
     *
     * @group Customer Auth
     *
     * @response 200 {
     *     "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9...",
     *     "token_type": "bearer",
     *     "expires_in": 3600
     * }
     */
    public function refresh()
    {
        return $this->respondWithToken(auth('customer-api')->refresh());
    }

    /**
     * Update the authenticated customer's profile.
     *
     * @group Customer Auth
     *
     * @bodyParam name string The name of the customer. Example: John Doe
     * @bodyParam password string The password for the customer. Example: secret
     * @bodyParam password_confirmation string The confirmation for the password. Example: secret
     *
     * @response 200 {
     *     "id": 1,
     *     "name": "John Doe",
     *     "email": "johndoe@example.com",
     *     "created_at": "2021-09-15T14:59:48.000000Z",
     *     "updated_at": "2021-09-15T14:59:48.000000Z"
     * }
     * @response 422 {
     *     "message": "Validation error",
     *     "errors": {
     *         "email": ["The email has already been taken."]
     *     }
     * }
     */
    public function updateProfile(Request $request)
    {
        $customer = auth('customer-api')->user();

        $validator = Validator::make($request->all(), [
            'name' => 'nullable|string|max:255|min:2',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if ($request->filled('name')) {
            $customer->name = $request->name;
        }

        if ($request->filled('password')) {
            $customer->password = Hash::make($request->password);
        }

        $customer->save();

        return response()->json($customer);
    }

    /**
     * Delete the authenticated customer.
     *
     * @group Customer Auth
     *
     * @response 200 {
     *     "message": "Customer deleted successfully"
     * }
     */
    public function deleteUser()
    {
        $customer = auth('customer-api')->user();
        $customer->delete();

        return response()->json(['message' => 'Customer deleted successfully']);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('customer-api')->factory()->getTTL() * 60,
        ]);
    }
}
