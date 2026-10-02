<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    use HasUuids;

    protected $primaryKey = 'unique_id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'name',
    ];

    public function uniqueIds(): array
    {
        return ['unique_id'];
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'role_id', 'unique_id');
    }
}
