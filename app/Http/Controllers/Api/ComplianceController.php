<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Compliance;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ComplianceController extends Controller
{
    public function index(): JsonResponse
    {
        $data = Compliance::query()
            ->orderByDesc('year')
            ->get([
                'unique_id',
                'year',
                'category',
                'title',
                'description',
            ]);

        return response()->json([
            'data' => $data,
        ]);
    }
}
