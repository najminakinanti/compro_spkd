<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable, HasUuids;

    protected $primaryKey = 'unique_id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'role_id',
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function uniqueIds(): array
    {
        return ['unique_id'];
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo(
            Role::class,
            'role_id',
            'unique_id'
        );
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return in_array($this->role?->name, [
            'Admin',
            'Editor',
        ]);
    }
}
