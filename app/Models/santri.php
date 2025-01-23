<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class santri extends Model
{
    /** @use HasFactory<\Database\Factories\SantriFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'asrama_id',
        'kelas_id',
        'kegiatan_id',
        'nis',
        'tanggal_lahir',
        'jenis_kelamin'
    ];

    public function asrama(){
        return $this->belongsTo(asrama::class);
    }

    public function kelas(){
        return $this->belongsTo(kelas::class);
    }

    public function kegiatan(){
        return $this->belongsTo(kegiatan_pesantren::class);
    }
}
