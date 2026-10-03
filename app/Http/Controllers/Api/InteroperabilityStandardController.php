<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\InteroperabilityStandard;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class InteroperabilityStandardController extends Controller
{
    public function index(): JsonResponse
    {
        $data = InteroperabilityStandard::query()
            ->orderBy('name')
            ->get([
                'unique_id',
                'name',
                'description',
            ]);

        return response()->json([
            'data' => $data,
        ]);
    }
}
