<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class InteroperabilityStandard extends Model
{
    use HasUuids;

    protected $table = 'interoperability_standards';

    protected $primaryKey = 'unique_id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'name',
        'description',
    ];

    public function uniqueIds(): array
    {
        return ['unique_id'];
    }

}
