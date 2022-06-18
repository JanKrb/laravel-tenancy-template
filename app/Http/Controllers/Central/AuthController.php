<?php

namespace App\Http\Controllers\Central;

use App\Http\Controllers\Controller;
use App\Http\Requests\Central\Auth\LoginRequest;
use App\Http\Services\ResponseService;
use App\Models\CentralUser;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Authenticate user and create token
     * @param LoginRequest $request
     * @return JsonResponse
     * TODO: Unit Test
     */
    public function login(LoginRequest $request): JsonResponse
    {
        /**
         * @var array<{email: string, name: string, password: string}>
         */
        $credentials = $request->only(['email', 'name', 'password']);

        // Return user info if already logged in
        if (\auth('central')->check()) return $this->user($request);

        if (\auth('central')->attempt($credentials)) {
            /**
             * @var CentralUser
             */
            $user = \auth('central')->user();

            $token = $user->createPersonalAccessToken((boolval($request->get('remember_me', false))));

            return ResponseService::sendResponse([
                'token' => $token,
                'user' => $user
            ], 'User authenticated successfully.', 200);
        }

        return ResponseService::sendResponse([
            'message' => 'Invalid credentials.'
        ], 'User authentication failed.', 401);
    }

    /**
     * Get own user information
     * @param Request $request
     * @return JsonResponse
     */
    public function user(Request $request): JsonResponse
    {
        return ResponseService::sendResponse([
            "user" => $request->user()
        ], 'User detail information fetched successfully.', 200);
    }
}
