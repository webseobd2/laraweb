<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->text($maxNbChars=20),
            'description'=>$this->faker->text($maxNbChars=100),
            'is_awarded'=>$this->faker->boolean(),
            'status'=>$this->faker->randomElement(['Pending','Wait','Awarded']),
        ];
    }
}
