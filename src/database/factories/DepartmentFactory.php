<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
use App\Models\Department;

class DepartmentFactory extends Factory
{
    private static int $num = 1;

    public function definition()
    {
        $now = Carbon::now();  

        return [
            'name' => "部署".self::$num++, 
            'manager_name' => $this->faker->name(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
