<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AccreditationController;
use App\Http\Controllers\Api\CompanyProfileController;
use App\Http\Controllers\Api\ComplianceController;
use App\Http\Controllers\Api\EcosystemStatsController;
use App\Http\Controllers\Api\HomepageHeroController;
use App\Http\Controllers\Api\HomepageHeroImageController;
use App\Http\Controllers\Api\InteroperabilityStandardController;
use App\Http\Controllers\Api\NewsCategoryController;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\DiscussionRequestController;

Route::get('/accreditations', [
    AccreditationController::class,
    'index',
]);

Route::get('/company-profile', [
    CompanyProfileController::class,
    'show',
]);

Route::get('/compliances', [
    ComplianceController::class,
    'index',
]);

Route::get('/ecosystem-stats', [
    EcosystemStatsController::class,
    'show',
]);

Route::get('/homepage-hero', [
    HomepageHeroController::class,
    'show',
]);

Route::get('/homepage-hero-images', [
    HomepageHeroImageController::class,
    'index',
]);

Route::get('/interoperability-standards', [
    InteroperabilityStandardController::class,
    'index',
]);

Route::get('/news-categories', [
    NewsCategoryController::class,
    'index',
]);

Route::get('/news', [
    NewsController::class,
    'index',
]);

Route::get('/news/{slug}', [
    NewsController::class,
    'show',
]);

Route::post('/discussion-requests', [
    DiscussionRequestController::class, 
    'store',
]);
