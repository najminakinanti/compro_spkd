<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TurnstileService
{
    public function verify(string $token, ?string $ip = null): bool
    {
        $response = Http::asForm()->post(
            config('services.turnstile.verify_url'),
            [
                'secret' => config('services.turnstile.secret_key'),
                'response' => $token,
                'remoteip' => $ip,
            ]
        );

        if (!$response->successful()) {
            return false;
        }

        return $response->json('success', false);
    }
}