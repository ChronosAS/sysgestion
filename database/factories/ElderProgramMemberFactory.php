<?php

namespace Database\Factories;

use App\Models\ElderProgramMember;
use App\Enum\ApplicationStatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ElderProgramMember>
 */
class ElderProgramMemberFactory extends Factory
{
    protected $model = ElderProgramMember::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => Str::uuid(),
            'elder_id' => \App\Models\Citizen::factory(),
            'occupation' => $this->faker->jobTitle,
            'education_level' => $this->faker->randomElement(['primary', 'secondary', 'tertiary', 'university']),
            // 'status' => $this->faker->randomElement(ApplicationStatusEnum::values()),
            'medical_aspect' => $this->faker->sentence,
            'psychosocial_aspect' => $this->faker->sentence,
            'environmental_aspect' => $this->faker->sentence,
            'account_number' => $this->faker->bankAccountNumber,
            'city_of_birth' => $this->faker->city,
            'family_monthly_income' => $this->faker->randomFloat(2, 0, 10000),
            'family_monthly_expenses' => $this->faker->randomFloat(2, 0, 10000),
        ];
    }
}
