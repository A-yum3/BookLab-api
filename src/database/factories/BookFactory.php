<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\BookCategory;
use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->text(),
            'publish_at' => CarbonImmutable::now(),
            'created_at' => CarbonImmutable::now(),
            'updated_at' => CarbonImmutable::now(),

            'book_category_id' => BookCategory::factory(),
        ];
    }
}
