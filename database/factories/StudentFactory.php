<?php

namespace Database\Factories;

use App\Models\Teachers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Student::class;
    public function definition(): array
    {
        return [
            'student_name' => $this->faker->name,
            'class_teacher_id' => Teachers::inRandomOrder()->first()->id,
            'class' => $this->faker->randomElement(['1st Grade', '2nd Grade', '3rd Grade']),
            'admission_date' => $this->faker->date,
            'yearly_fees' => $this->faker->randomFloat(2, 5000, 10000),
        ];
        
    }
}
