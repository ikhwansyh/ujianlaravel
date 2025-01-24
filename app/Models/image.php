<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    /** @use HasFactory<\Database\Factories\ImageFactory> */
    use HasFactory;

    protected $fillable = [
        'image',
    ];

    public function kegiatan_pesantren()
    {
        return $this->morphedByMany(kegiatan_pesantren::class, 'imageable');
    }

    public function santriprofil()
    {
        return $this->morphedByMany(santri::class, 'imageable');
    }

    public function pengajarprofil()
    {
        return $this->morphedByMany(pengajar::class, 'imageable');
    }

    public function kegiatankelas()
    {
        return $this->morphedByMany(kelas::class, 'imageable');
    }
}
