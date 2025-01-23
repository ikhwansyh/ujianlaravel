<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mapel extends Model
{
    /** @use HasFactory<\Database\Factories\MapelFactory> */
    use HasFactory;
    

    protected $fillable = [
        'name',
        'kelas_id',
        'pengajar_id',
    ];

    public function kelas(){
        return $this->belongsTo(kelas::class);
    }

    public function pengajar(){
        return $this->belongsTo(pengajar::class);
    }
}
