<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TurnstileService
{
    public function verify(string $token, ?string $ip = null): array
    {
        $response = Http::asForm()->post(
            config('services.turnstile.verify_url'),
            [
                'secret' => config('services.turnstile.secret_key'),
                'response' => $token,
                'remoteip' => $ip,
            ]
        );

        return $response->json();
    }
}