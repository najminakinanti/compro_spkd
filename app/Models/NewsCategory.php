<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;

class NewsCategory extends Model
{
    use HasUuids;

    protected $table = 'news_categories';

    protected $primaryKey = 'unique_id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'name',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function uniqueIds(): array
    {
        return ['unique_id'];
    }

    public function news(): HasMany
    {
        return $this->hasMany(News::class, 'category_id', 'unique_id');
    }

}
