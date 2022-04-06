<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    use HasFactory;

    protected $casts = [
        'updated_at' => 'immutable_datetime',
        'created_at' => 'immutable_datetime'
    ];

    /**
     * @return HasMany
     */
    public function authorBooks(): HasMany
    {
        return $this->hasMany(AuthorBook::class);
    }
}
