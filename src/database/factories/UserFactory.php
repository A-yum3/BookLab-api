<?php

namespace Database\Factories;

use App\Enum\UserRoleType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'avatar' => $this->faker->imageUrl,
            'provider' => 'Google',
            'provider_id' => $this->faker->isbn10(),
            'role' => UserRoleType::Normal
        ];
    }

    /**
     * @return $this
     */
    public function normal(): self
    {
        return $this->state(fn() => [
            'role' => UserRoleType::Normal
        ]);
    }

    /**
     * @return $this
     */
    public function admin(): self
    {
        return $this->state(fn() => [
            'role' => UserRoleType::Admin
        ]);
    }

}
