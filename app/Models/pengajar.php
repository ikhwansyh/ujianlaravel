<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajar extends Model
{
    /** @use HasFactory<\Database\Factories\PengajarFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function kelas(){
        return $this->hasMany(kelas::class);
    }

    public function mapel(){
        return $this->hasMany(mapel::class);
    }
}
