<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\BookLoanHistory;
use App\Models\User;
use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookLoanHistoryFactory extends Factory
{
    protected $model = BookLoanHistory::class;

    public function definition(): array
    {
        return [
            'checkout_at' => $this->faker->word(),
            'return_at' => $this->faker->word(),
            'created_at' => CarbonImmutable::now(),
            'updated_at' => CarbonImmutable::now(),

            'book_id' => Book::factory(),
            'user_id' => User::factory(),
        ];
    }
}
