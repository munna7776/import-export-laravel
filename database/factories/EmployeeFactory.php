<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fname'=>$this->faker->firstName(),
            'lname'=>$this->faker->lastName(),
            'email'=>$this->faker->unique()->safeEmail(),
            'dob'=>$this->faker->date($format = 'd-m-Y', $max = 'now',$min='1990')
        ];
    }
}
