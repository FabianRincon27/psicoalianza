<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employee;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
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
     * @return array<string, mixed>
     */

     
    public function definition()
    {
        return [
            'name' => $this->faker->firstNameMale,
            'lastname' => $this->faker->lastName,
            'type_document' => $this->faker->randomElement(['0','1']),
            'num_document' => $this->faker->randomNumber(8),
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'city' => $this->faker->city,
        ];
    }
}
