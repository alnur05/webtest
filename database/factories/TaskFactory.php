<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Stack;
use App\Models\Status;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'tester_id' => User::factory(),
            'stack_id' => Stack::factory(),
            'status_id' => Status::factory(),
            'type_id' => Type::factory(),
            'code' => $this->faker->slug,
            'title' => $this->faker->sentence,
            'priority' => 'Low',
            'deadline' => today(),
        ];
    }
}
