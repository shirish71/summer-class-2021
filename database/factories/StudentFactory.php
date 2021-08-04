<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'roll_no' => $this->faker->numberBetween(1, 1000),
            'address' => $this->faker->address,
            'contact_no' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'active' => $this->faker->boolean
        ];
    }
}
