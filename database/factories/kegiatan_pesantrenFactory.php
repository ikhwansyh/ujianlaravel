<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\kegiatan_pesantren>
 */
class kegiatan_pesantrenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $kegiatan = [
            'pengajian',
            'perlombaan',
            'kerjabakti',
        ];
        return [
            'kegiatan'=>fake()->randomElement($kegiatan),
            'tanggal'=>fake()->date(),
            'deskripsi'=>fake()->paragraph(),
        ];
    }
}
