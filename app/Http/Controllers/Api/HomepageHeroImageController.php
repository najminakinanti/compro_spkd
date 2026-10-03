<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\HomepageHeroImage;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HomepageHeroImageController extends Controller
{
    public function index(): JsonResponse
    {
        $data = HomepageHeroImage::query()
            ->orderBy('unique_id')
            ->get([
                'unique_id',
                'hero_id',
                'image',
                'description',
            ]);

        return response()->json([
            'data' => $data,
        ]);
    }
}
