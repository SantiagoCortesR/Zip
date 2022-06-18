<?php

namespace Database\Factories;

use App\Models\Day;
use App\Models\event;
use App\Models\room;
use App\Models\timezone;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = event::class;

    public function definition()
    {
        return [
            'type' => $this->faker->randomElement(['Class','Work Meeting']),
            'tutor' => $this->faker->randomElement(['Ivan Botero', 'Naomi Wright', 'Ellie Connor']),
            'color' => $this->faker->rgbcolor(),
            'student' => $this->faker->randomElement(['Adelaide Brown','Angel King', 'Angus Zeeman','Archie Lester']),
            'timezone_id' => timezone::inRandomOrder()->first()->id,
            'day_id' => Day::inRandomOrder()->first()->id,
            'room_id' => room::inRandomOrder()->first()->id,
        ];
    }
}
