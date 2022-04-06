<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
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
