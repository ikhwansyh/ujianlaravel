<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asrama extends Model
{
    /** @use HasFactory<\Database\Factories\AsramaFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
    ];
    public function santris(){
        return $this->hasMany(santri::class);
    }

}
