<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class DiscussionRequest extends Model
{
    use HasUuids;

    protected $table = 'discussion_requests';

    protected $primaryKey = 'unique_id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'reference_number',
        'solution_key',
        'name',
        'email',
        'phone',
        'role',
        'institution',
        'message',
        'status',
    ];

    public function uniqueIds(): array
    {
        return ['unique_id'];
    }
}
