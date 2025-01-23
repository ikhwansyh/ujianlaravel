<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\image;
use App\Models\kelas;
use App\Models\mapel;
use App\Models\asrama;
use App\Models\santri;
use App\Models\pengajar;
use Illuminate\Database\Seeder;
use App\Models\kegiatan_pesantren;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        
        // Membuat 2 kelas, lalu mengaitkan pengajar, mapel, dan santri dengan kelas_id
        $kamars = Asrama::factory(10)->create(); 
        $pengajars = pengajar::factory(20)->create();
        kegiatan_pesantren::factory(20)->create();

        // Membuat 20 pengajar untuk setiap kelas
        foreach ($pengajars as $pengajar) {
            $kelas = Kelas::factory()->create(['pengajar_id' => $pengajar->id]);
            
            foreach ($kelas as $class) {
                // Membuat 3 mapel untuk setiap kelas
                Mapel::factory(3)->create(['kelas_id' => $pengajar->id]);
        
                // Membuat 10 santri untuk setiap kelas
                Santri::factory(10)->create(['kelas_id' => $pengajar->id]);
        }}
        
        // Membuat 10 asrama dan mengaitkan santri dengan kamar_id
        foreach ($kamars as $kamar) {
            Santri::factory(10)->create(['asrama_id' => $kamar->id]);
        }

        // Membuat 20 kegiatan pesantren
        
        // Membuat 200 gambar
        Image::factory(200)->create();
    }
}
