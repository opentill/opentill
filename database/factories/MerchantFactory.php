<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Merchant>
 */
final class MerchantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'legal_name' => fake()->optional()->company(),
            'business_name' => fake()->company(),
            'email' => fake()->unique()->companyEmail(),
            'phone_number' => fake()->phoneNumber(),
            'address_line_1' => fake()->streetAddress(),
            'address_line_2' => fake()->optional()->buildingNumber(),
            'city' => fake()->city(),
            'state' => fake()->randomElement(['CA', 'NY', 'TX', 'FL']),
            'postal_code' => fake()->postcode(),
            'country' => fake()->country(),
            'identification_number' => fake()->unique()->numerify('##########'),
        ];
    }
}
