<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => $this->faker->title(),
            "description" => $this->faker->text(),
            "date" => Carbon::createFromTimestamp(rand(1262055681, now()->timestamp)),
            "location" => $this->faker->city(),
            "created_at" => now(),
            "updated_at" => now(),
        ];
    }
}
