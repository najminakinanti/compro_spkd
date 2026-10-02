<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HomepageHero extends Model
{
    use HasUuids;

    protected $table = 'homepage_hero';

    protected $primaryKey = 'unique_id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'badge',
        'title',
        'description',
    ];

    public function uniqueIds(): array
    {
        return ['unique_id'];
    }

    public function images(): HasMany
    {
        return $this->hasMany(HomepageHeroImage::class, 'hero_id', 'unique_id');
    }
}
