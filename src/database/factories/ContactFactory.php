<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
use App\Models\Contact;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $now = Carbon::now();  

        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'content' => $this->faker->sentence(),
            'age' => $this->faker->numberBetween(1, 100),
            'gender' => $this->faker->numberBetween(1, 3),
            'department_id' => $this->faker->numberBetween(1, 10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
