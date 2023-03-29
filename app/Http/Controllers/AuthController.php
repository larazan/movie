<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;

class AuthController extends Controller
{
     /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('sanitize')->only(['register']);
    }

    /**
     * Log in a user
     */
    public function login(Request $request)
    {
        $this->checkTooManyFailedAttempts();

        $user = User::where('email', $request->email)->first();

        try {
            $credentials = request(['email', 'password']);

            if (!Auth::attempt($credentials))
            {
                RateLimiter::hit($this->throttleKey(), $seconds = 3600);

                return response()->json([
                    'status_code' => 401,
                    'message' => 'Unauthorized',
                ]);
            }

            if (!Hash::check($request->password, $user->password, [])) {
                throw new Exception('Error occured while logging in.');
            }

            $token = $user->createToken('authToken')->plainTextToken;

            RateLimiter::clear($this->throttleKey());

            return response()->json([
                'status_code' => 200,
                'message' => 'Success',
                'access_token' => $token,
                'token_type' => 'Bearer',
                'user' => $user,
            ]);
        } catch (Exception $error) {
            return response()->json([
                'status_code' => 500,
                'message' => 'Error occured while loggin in.',
                'error' => $error,
            ]);
        }
    }

    /**
     * Get the rate limiting throttle key for the request.
     *
     * @return string
     */
    public function throttleKey()
    {
        return Str::lower(request('email')) . '|' . request()->ip();
    }

    /**
     * Ensure the login request is not rate limited.
     *
     * @return void
     */
    public function checkTooManyFailedAttempts()
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 10)) {
            return;
        }

        throw new Exception('IP address banned. Too many login attempts.');
    }
}
