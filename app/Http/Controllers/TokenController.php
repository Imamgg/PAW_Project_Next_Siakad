<?php

namespace App\Http\Controllers;

use App\Services\TokenService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TokenController extends Controller
{
    protected $tokenService;

    public function __construct(TokenService $tokenService)
    {
        $this->tokenService = $tokenService;
    }

    public function store(Request $request)
    {
        $request->validate([
            'token' => 'required|string',
        ]);

        if (session('token')) {
            $request->session()->forget('token');
        };

        $token = $request->input('token');
        $this->tokenService->setToken($token);

    }

    public static function get()
    {
        $token = session('token');

        if ($token) {
            return $token;
        }

        return null;
    }

    public static function destroyToken(Request $request)
    {
        $token = $request->session()->forget('token');
        return $token;
    }



}
