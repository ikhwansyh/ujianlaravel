<?php

namespace Database\Factories;

use App\Models\santri;
use App\Models\pengajar;
use App\Models\kegiatan_pesantren;
USE App\Models\kelas;
use App\Models\image;
use App\Models\imageable;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\imageable>
 */
class ImageableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image_id'=>image::all()->random()->id,
            'imageable_id'=>fake()->randomElement([
                santri::all()->random(),
                pengajar::all()->random(),
                kegiatan_pesantren::all()->random(),
                kelas::all()->random(),
            ]),
            'imageable_type'=>fake()->randomElement([
                santri::class,
                pengajar::class,
                kegiatan_pesantren::class,
                kelas::class,
            ]),
        ];
    }
}
