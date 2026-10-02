<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    use HasUuids;

    protected $table = 'news';

    protected $primaryKey = 'unique_id';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'excerpt',
        'content',
        'featured_image',
        'author',
        'reading_time',
        'is_featured',
        'is_published',
        'published_at',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'content' => 'array',
        'is_featured' => 'boolean',
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    public function uniqueIds(): array
    {
        return ['unique_id'];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(
            NewsCategory::class,
            'category_id',
            'unique_id'
        );
    }

}
