<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\NewsCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function index(): JsonResponse
    {
        $data = NewsCategory::query()
            ->where('is_active', true)
            ->orderBy('name')
            ->get([
                'unique_id',
                'name',
                'is_active',
            ]);

        return response()->json([
            'data' => $data,
        ]);
    }
}
