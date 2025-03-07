<?php

namespace Database\Factories;

use App\Models\Citizen;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Citizen>
 */
class CitizenFactory extends Factory
{
    protected $model = Citizen::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'id' => Str::uuid(),
            'document' => $this->faker->unique()->numberBetween(10000000, 99999999),
            'first_names' => $this->faker->firstName,
            'last_names' => $this->faker->lastName,
            'civil_status' => $this->faker->randomElement(['s', 'm', 'd', 'w']),
            'dob' => $this->faker->date('Y-m-d', '2005-01-01'),
            'gender' => $this->faker->randomElement(['M', 'F']),
            'email' => $this->faker->unique()->safeEmail,
            'phone_number' => $this->faker->phoneNumber,
            'phone_number_2' => $this->faker->optional()->phoneNumber,
            'address' => $this->faker->address,
            'estado_id' => $this->faker->numberBetween(1, 24),
            'municipio_id' => $this->faker->numberBetween(1, 335),
            'parroquia_id' => $this->faker->numberBetween(1, 1136),
            'observations' => $this->faker->optional()->text(500),
        ];
    }
}
