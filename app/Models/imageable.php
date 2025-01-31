<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imageable extends Model
{
    /** @use HasFactory<\Database\Factories\ImageableFactory> */
    use HasFactory;

    protected $fillable = [
        'image_id',
        'imageable_id',
        'imageable_type',
    ];

    public function imageable()
    {
        return $this->morphTo();
    }
}
