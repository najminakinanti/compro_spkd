<?php

namespace App\Mail;

use App\Models\DiscussionRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DiscussionRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public DiscussionRequest $discussion,
        public string $emailSubject,
        public string $emailBody,
    ) {
    }

    public function build(): static
    {
        return $this
            ->subject($this->emailSubject)
            ->html($this->emailBody);
    }
}