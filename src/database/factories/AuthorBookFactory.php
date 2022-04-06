<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\AuthorBook;
use App\Models\Book;
use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorBookFactory extends Factory
{
    protected $model = AuthorBook::class;

    public function definition(): array
    {
        return [
            'created_at' => CarbonImmutable::now(),
            'updated_at' => CarbonImmutable::now(),

            'book_id' => Book::factory(),
            'author_id' => Author::factory(),
        ];
    }
}
