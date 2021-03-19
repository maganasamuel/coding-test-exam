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
            'first_name' => $this->faker->firstName,
            'middle_name' => $this->faker->lastName,
            'last_name' => $this->faker->lastName,
            'gender' => $this->faker->numberBetween(0, 1),
            'birth_date' => $this->faker->dateTimeBetween('-50 years', '-30 years')->format('Y-m-d'),
            'address' => $this->faker->address,
            'contact_number' => $this->faker->numerify('###########'),
            'company' => $this->faker->company,
            'job_title' => $this->faker->jobTitle,
            'salary_per_month' => $this->faker->numberBetween(300, 1000),
        ];
    }
}
