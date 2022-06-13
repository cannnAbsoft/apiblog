<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name_customer' => $this->faker->firstName(),
            'phone_customer' => $this->faker->phoneNumber(),
            'email_customer' => $this->faker->unique()->safeEmail(),
            'address_customer' => $this->faker->address(),
            'city_customer' => $this->faker->city()
        ];
    }
}
