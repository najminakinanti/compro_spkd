<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class HomepageHeroImage extends Model
{
    use HasUuids;

    protected $table = 'homepage_hero_images';

    protected $primaryKey = 'unique_id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'hero_id',
        'image',
        'description',
    ];

    public function uniqueIds(): array
    {
        return ['unique_id'];
    }

    public function hero(): BelongsTo
    {
        return $this->belongsTo(
            HomepageHero::class,
            'hero_id',
            'unique_id'
        );
    }
}
