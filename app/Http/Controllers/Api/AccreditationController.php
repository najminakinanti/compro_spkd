<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Accreditation;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AccreditationController extends Controller
{
    public function index(): JsonResponse
    {
        $data = Accreditation::query()
            ->orderBy('name')
            ->get([
                'unique_id',
                'name',
                'description',
                'logo',
            ]);

        return response()->json([
            'data' => $data,
        ]);
    }

}
