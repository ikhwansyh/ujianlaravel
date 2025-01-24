<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kegiatan_pesantren extends Model
{
    /** @use HasFactory<\Database\Factories\KegiatanPesantrenFactory> */
    use HasFactory;

    protected $fillable = [
        'kegiatan',
        'tanggal',
        'deskripsi'
    ];

    public function santris(){
        return $this->hasMany(santri::class);
    }
    public function images()
    {
        return $this->morphToMany(image::class, 'imageable');
    }



}
