<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;

    protected $casts = [
        'publish_at' => 'immutable_datetime',
        'created_at' => 'immutable_datetime',
        'updated_at' => 'immutable_datetime'
    ];

    /**
     * @return BelongsTo
     */
    public function BookCategory(): BelongsTo
    {
        return $this->belongsTo(BookCategory::class);
    }

    /**
     * @return HasMany
     */
    public function authorBooks(): HasMany
    {
        return $this->hasMany(AuthorBook::class);
    }

    /**
     * @return HasMany
     */
    public function bookLoanHistories(): HasMany
    {
        return $this->hasMany(BookLoanHistory::class);
    }

    /**
     * @return HasMany
     */
    public function bookReservations(): HasMany
    {
        return $this->hasMany(BookReservation::class);
    }
}
