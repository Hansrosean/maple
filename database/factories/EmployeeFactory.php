<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    protected $model = Employee::class;

    public function definition(): array
    {
        return [
            'employee_code' => 'EMP-' . $this->faker->unique()->numberBetween(1000, 9999),
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'birth_date' => $this->faker->date('Y-m-d', '2000-01-01'),
            'hire_date' => $this->faker->date('Y-m-d', 'now'),
            'employment_type' => $this->faker->randomElement(['Full-time', 'Contract', 'Intern']),
            'employment_status' => $this->faker->randomElement(['Active', 'Inactive']),
            // Asumsi id 1-5 sudah ada di tabel departments & positions
            'department_id' => $this->faker->numberBetween(1, 5),
            'position_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
