<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\EcosystemStats;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EcosystemStatsController extends Controller
{
    public function show(): JsonResponse
    {
        $data = EcosystemStats::query()
            ->first([
                'unique_id',
                'module_count',
                'client_count',
            ]);

        if (!$data) {
            return response()->json([
                'message' => 'Ecosystem stats not found.',
            ], 404);
        }

        return response()->json([
            'data' => $data,
        ]);
    }
}
