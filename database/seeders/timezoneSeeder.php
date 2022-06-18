<?php

namespace Database\Seeders;

use App\Models\timezone;
use Illuminate\Database\Seeder;

class timezoneSeeder extends Seeder
{
    
    public function run()
    {
        $timezones = [
            ['timezone' => '6:30AM - 7:30AM'],
            ['timezone' => '7:31AM - 8:30AM'],
            ['timezone' => '8:31AM - 9:30AM'],
            ['timezone' => '9:31AM - 10:30AM'],
            ['timezone' => '10:31AM - 11:30AM'],
            ['timezone' => '11:31AM - 12:30PM'],
            ['timezone' => '12:31PM - 1:30PM'],
            ['timezone' => '1:31PM - 2:30PM'],
            ['timezone' => '2:31PM - 3:30PM'],
            ['timezone' => '3:31PM - 4:30PM'],
            ['timezone' => '4:31PM - 5:30PM'],
            ['timezone' => '5:31PM - 6:30PM'],
            ['timezone' => '6:31PM - 7:30PM'],
            
        ];

        foreach ($timezones as $timezone) {
            timezone::create(
                $timezone
            );
        }
    }
}