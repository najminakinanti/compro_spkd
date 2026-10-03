<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    public function show(): JsonResponse
    {
        $data = CompanyProfile::query()
            ->first([
                'unique_id',
                'name',
                'short_description',
                'about_title',
                'about_description',
                'email',
                'phone',
                'address',
                'work_hour',
            ]);

        if (!$data) {
            return response()->json([
                'message' => 'Company profile not found.',
            ], 404);
        }

        return response()->json([
            'data' => $data,
        ]);
    }
}
