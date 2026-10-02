<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Compliance extends Model
{
    use HasUuids;

    protected $table = 'compliances';

    protected $primaryKey = 'unique_id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'year',
        'category',
        'title',
        'description',
    ];

    public function uniqueIds(): array
    {
        return ['unique_id'];
    }

}
