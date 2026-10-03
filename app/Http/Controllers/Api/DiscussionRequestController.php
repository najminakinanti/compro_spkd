<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\DiscussionRequestMail;
use App\Models\DiscussionEmailTemplate;
use App\Models\DiscussionRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class DiscussionRequestController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'solution_key' => ['nullable', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'role' => ['nullable', 'string', 'max:255'],
            'institution' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string'],
        ]);

        $referenceNumber = $this->generateReferenceNumber();

        $discussion = DiscussionRequest::create([
            'reference_number' => $referenceNumber,
            'solution_key' => $validated['solution_key'] ?? null,
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'role' => $validated['role'] ?? null,
            'institution' => $validated['institution'] ?? null,
            'message' => $validated['message'],
            'status' => 'new',
        ]);

        $templateQuery = DiscussionEmailTemplate::query()
            ->where('is_active', true);

        if ($discussion->solution_key) {
            $templateQuery->where(
                'solution_key',
                $discussion->solution_key
            );
        } else {
            $templateQuery->whereNull('solution_key');
        }

        $template = $templateQuery->first();

        if (!$template) {
            return response()->json([
                'message' => 'Discussion request saved, but email template was not configured.',
                'data' => [
                    'reference_number' => $discussion->reference_number,
                ],
            ], 201);
        }

        $solutionName = $discussion->solution_key
            ? Str::headline($discussion->solution_key)
            : 'SPKD';

        $replacements = [
            '{{reference_number}}' => $discussion->reference_number,
            '{{solution_name}}' => $solutionName,
            '{{name}}' => $discussion->name,
            '{{email}}' => $discussion->email,
            '{{phone}}' => $discussion->phone ?? '-',
            '{{role}}' => $discussion->role ?? '-',
            '{{institution}}' => $discussion->institution ?? '-',
            '{{message}}' => $discussion->message,
            '{{created_at}}' => $discussion->created_at?->format('d M Y H:i'),
        ];

        $subject = str_replace(
            array_keys($replacements),
            array_values($replacements),
            $template->subject
        );

        $body = str_replace(
            array_keys($replacements),
            array_values($replacements),
            $template->body
        );

        Mail::to($template->recipient_email)
            ->send(
                (new DiscussionRequestMail(
                    $discussion,
                    $subject,
                    $body
                ))->replyTo(
                    $discussion->email,
                    $discussion->name
                )
            );

        return response()->json([
            'message' => 'Discussion request submitted successfully.',
            'data' => [
                'reference_number' => $discussion->reference_number,
            ],
        ], 201);
    }

    private function generateReferenceNumber(): string
    {
        do {
            $referenceNumber =
                'DISC-' . now()->format('Ymd') . '-' .
                strtoupper(Str::random(6));
        } while (
            DiscussionRequest::where(
                'reference_number',
                $referenceNumber
            )->exists()
        );

        return $referenceNumber;
    }
}