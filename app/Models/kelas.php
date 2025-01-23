<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    /** @use HasFactory<\Database\Factories\KelasFactory> */
    use HasFactory;
    
    protected $fillable = [
        'pengajar_id',
        'name',
        'tingkat',
        'jumlah_max'
    ];

    public function pengajar(){
        return $this->belongsTo(pengajar::class);
    }

    public function sntris(){
        return $this->hasMany( santri::class);
    }

    public function mapels(){
        return $this->hasMany(mapel::class);
    }
}
