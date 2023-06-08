<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $bug_id = DB::table('bugs')->pluck('id');

        return [
            'title' => fake()->words(3, true),
            'description' => fake()->sentence(10),
            // 'bug_id' => fake()->randomElement($bug_id),
        ];
    }
}
