<?php

namespace Database\Factories;

use App\Models\pengajar;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\kelas>
 */
class KelasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pengajar_id'=>pengajar::all()->random()->id,
            'name'=>fake()->name(),
            'tingkat'=>fake()->randomDigitNotZero(),
            'jumlah_max'=>fake()->numberBetween('25', '30')
        ];
    }
}
