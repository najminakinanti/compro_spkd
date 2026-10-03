<?php

namespace Database\Seeders;

use App\Models\DiscussionEmailTemplate;
use Illuminate\Database\Seeder;

class DiscussionEmailTemplateSeeder extends Seeder
{
    public function run(): void
    {
        $templates = [
            [
                'solution_key' => 'solution_1',
                'subject' => 'Discussion Request - {{name}}',
                'body' => "Hello,\n\n"
                    . "A new discussion request has been submitted through the SPKD Company Profile website.\n\n"
                    . "Reference Number: {{reference_number}}\n"
                    . "Solution: {{solution_name}}\n\n"
                    . "Name: {{name}}\n"
                    . "Email: {{email}}\n"
                    . "Phone: {{phone}}\n"
                    . "Role: {{role}}\n"
                    . "Institution: {{institution}}\n\n"
                    . "Message:\n"
                    . "{{message}}\n\n"
                    . "Please follow up on this discussion request.\n\n"
                    . "Regards,\n"
                    . "SPKD Company Profile",
                'recipient_email' => 'najminaanti@gmail.com',
                'is_active' => true,
            ],

            [
                'solution_key' => 'solution_2',
                'subject' => 'Partnership Discussion - {{name}}',
                'body' => "Hello,\n\n"
                    . "A new partnership discussion request has been submitted through the SPKD Company Profile website.\n\n"
                    . "Reference Number: {{reference_number}}\n"
                    . "Solution: {{solution_name}}\n\n"
                    . "Name: {{name}}\n"
                    . "Email: {{email}}\n"
                    . "Phone: {{phone}}\n"
                    . "Role: {{role}}\n"
                    . "Institution: {{institution}}\n\n"
                    . "Message:\n"
                    . "{{message}}\n\n"
                    . "Please follow up on this request.\n\n"
                    . "Regards,\n"
                    . "SPKD Company Profile",
                'recipient_email' => 'najminaanti@gmail.com',
                'is_active' => true,
            ],

            [
                'solution_key' => 'solution_3',
                'subject' => 'Product & Service Discussion - {{name}}',
                'body' => "Hello,\n\n"
                    . "A new product and service discussion request has been submitted through the SPKD Company Profile website.\n\n"
                    . "Reference Number: {{reference_number}}\n"
                    . "Solution: {{solution_name}}\n\n"
                    . "Name: {{name}}\n"
                    . "Email: {{email}}\n"
                    . "Phone: {{phone}}\n"
                    . "Role: {{role}}\n"
                    . "Institution: {{institution}}\n\n"
                    . "Message:\n"
                    . "{{message}}\n\n"
                    . "Please follow up on this request.\n\n"
                    . "Regards,\n"
                    . "SPKD Company Profile",
                'recipient_email' => 'najminaanti@gmail.com',
                'is_active' => true,
            ],
        ];

        foreach ($templates as $template) {
            DiscussionEmailTemplate::updateOrCreate(
                [
                    'solution_key' => $template['solution_key'],
                ],
                $template
            );
        }
    }
}