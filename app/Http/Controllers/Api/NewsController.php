<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(): JsonResponse
    {
        $data = News::query()
            ->with([
                'category:unique_id,name',
            ])
            ->where('is_published', true)
            ->orderByDesc('published_at')
            ->get([
                'unique_id',
                'category_id',
                'title',
                'slug',
                'excerpt',
                'featured_image',
                'author',
                'reading_time',
                'is_featured',
                'is_published',
                'published_at',
            ]);

        return response()->json([
            'data' => $data,
        ]);
    }

    public function show(string $slug): JsonResponse
    {
        $data = News::query()
            ->with([
                'category:unique_id,name',
            ])
            ->where('is_published', true)
            ->where('slug', $slug)
            ->first([
                'unique_id',
                'category_id',
                'title',
                'slug',
                'excerpt',
                'content',
                'featured_image',
                'author',
                'reading_time',
                'is_featured',
                'is_published',
                'published_at',
            ]);

        if (!$data) {
            return response()->json([
                'message' => 'News not found.',
            ], 404);
        }

        return response()->json([
            'data' => $data,
        ]);
    }   
}
