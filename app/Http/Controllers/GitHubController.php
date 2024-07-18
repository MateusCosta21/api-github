<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Log;

class GitHubController extends Controller
{
    public function getUser($username)
    {
        $endpoint = "https://api.github.com/users/{$username}";
        $response = Http::get($endpoint);

        Log::create([
            'endpoint' => $endpoint,
            'request' => json_encode(['username' => $username]),
            'response' => $response->body(),
        ]);

        return response()->json($response->json());
    }

    public function getFollowings($username)
    {
        $endpoint = "https://api.github.com/users/{$username}/following";
        $response = Http::get($endpoint);

        Log::create([
            'endpoint' => $endpoint,
            'request' => json_encode(['username' => $username]),
            'response' => $response->body(),
        ]);

        return response()->json($response->json());
    }
}

