<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => 1,
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'gender' => $this->faker->numberBetween(1, 3),
            'email' => $this->faker->safeEmail(),
            'tell' => $this->faker->phoneNumber(),
            'address' => '東京都港区芝5-29-20',
            'building' => 'クロスオフィス三田610',
            'detail' => '配送日の変更は可能でしょうか'
        ];
    }
}
