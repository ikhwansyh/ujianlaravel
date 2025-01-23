<?php

namespace Database\Factories;

use App\Models\kelas;
use App\Models\pengajar;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\mapel>
 */
class MapelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'kelas_id'=>kelas::all()->random()->id,
            'pengajar_id'=>pengajar::all()->random()->id,
        ];
    }
}
