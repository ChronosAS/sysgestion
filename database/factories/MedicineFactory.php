<?php

namespace Database\Factories;

use App\Enum\Medicines\CompositionEnum;
use App\Enum\Medicines\PresentationEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medicine>
 */
class MedicineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'composition' => $this->faker->randomElement(['mg','cm3','ml']),
            'composition_quantity' => $this->faker->randomDigitNotZero(), // Random quantity
            'active_component' => $this->faker->word,
            'presentation' => $this->faker->randomElement(['pill','syrup','ampoule']),
            'laboratory' => $this->faker->company,
            'stock' => $this->faker->numberBetween(0, 20),
            'expiration_date' => $this->faker->dateTimeBetween('now', '+2 years'),
            'entry_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
