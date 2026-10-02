<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    use HasUuids;

    protected $primaryKey = 'unique_id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'name',
        'short_description',
        'about_title',
        'about_description',
        'email',
        'phone',
        'address',
        'work_hour',
    ];

    public function uniqueIds(): array
    {
        return ['unique_id'];
    }
}