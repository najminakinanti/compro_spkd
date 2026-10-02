<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class EcosystemStats extends Model
{ 
    use HasUuids;

    protected $table = 'ecosystem_stats';

    protected $primaryKey = 'unique_id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'module_count',
        'client_count',
    ];

    protected $casts = [
        'module_count' => 'integer',
        'client_count' => 'integer',
    ];

    public function uniqueIds(): array
    {
        return ['unique_id'];
    }
}
