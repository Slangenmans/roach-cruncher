<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Project;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bug>
 */
class BugFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $projectId = Project::pluck('id')->random();

        return [
            'title' => fake()->name(),
            'description' => fake()->sentence(10),
            'isOpen' => fake()->boolean(),
            'project_id' => $projectId,
        ];
    }
}
