<?php

namespace Database\Factories;

use App\Models\BookCategory;
use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookCategoryFactory extends Factory
{
    protected $model = BookCategory::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'created_at' => CarbonImmutable::now(),
            'updated_at' => CarbonImmutable::now(),
        ];
    }
}
