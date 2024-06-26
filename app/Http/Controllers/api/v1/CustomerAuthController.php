<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class CustomerAuthController extends Controller
{
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

    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (!$token = auth('customer-api')->attempt($credentials)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return $this->respondWithToken($token);
    }

    public function me()
    {
        return response()->json(auth('customer-api')->user());
    }

    public function logout()
    {
        auth('customer-api')->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    public function refresh()
    {
        return $this->respondWithToken(auth('customer-api')->refresh());
    }

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
