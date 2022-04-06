<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\BookReservation;
use App\Models\User;
use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookReserVationFactory extends Factory
{
    protected $model = BookReservation::class;

    public function definition(): array
    {
        return [
            'created_at' => CarbonImmutable::now(),
            'updated_at' => CarbonImmutable::now(),

            'user_id' => User::factory(),
            'book_id' => Book::factory(),
        ];
    }
}
