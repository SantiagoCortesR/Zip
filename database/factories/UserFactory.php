<?php

namespace Database\Factories;

use App\Helpers\Helper;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    
    public function definition()
    {
        return [
            'code_id' => Helper::IDGenerator(new User, 'code_id', 3, 'AS'),
            'name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),    
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'profile_photo' => 'https://ui-avatars.com/api/?background=random&rounded=true&format=svg&name='.$this->faker->firstName(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

  
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
