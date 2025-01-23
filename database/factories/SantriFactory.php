<?php

namespace Database\Factories;

use App\Models\asrama;
use App\Models\kelas;
use App\Models\kegiatan_pesantren;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\santri>
 */
class SantriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $jenis_kelamin = ['Laki-laki', 'Perempuan'];
        return [
            'name'=>fake()->name(),
            'asrama_id'=>asrama::all()->random()->id,
            'kelas_id'=>kelas::all()->random()->id,
            'kegiatan_id' => kegiatan_pesantren::all()->random()->id,
            'nis'=>fake()->randomNumber(),
            'tanggal_lahir'=>fake()->date(),
            'jenis_kelamin'=>fake()->randomElement($jenis_kelamin)
        ];
    }
}
