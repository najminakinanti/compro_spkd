<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiscussionRequestController;

Route::post(
    '/discussion-requests',
    [DiscussionRequestController::class, 'store']
);
