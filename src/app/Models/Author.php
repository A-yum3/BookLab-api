<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{

    /**
     * @return HasMany
     */
    public function authorBooks(): HasMany
    {
        return $this->hasMany(AuthorBook::class);
    }
}
