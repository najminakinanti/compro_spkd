<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\HomepageHero;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HomepageHeroController extends Controller
{
    public function show(): JsonResponse
    {
        $data = HomepageHero::query()
            ->with([
                'images' => function ($query) {
                    $query->select([
                        'unique_id',
                        'hero_id',
                        'image',
                        'description',
                    ]);
                },
            ])
            ->first([
                'unique_id',
                'badge',
                'title',
                'description',
            ]);

        if (!$data) {
            return response()->json([
                'message' => 'Homepage hero not found.',
            ], 404);
        }

        return response()->json([
            'data' => $data,
        ]);
    }
}
