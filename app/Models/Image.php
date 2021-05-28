<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    //Relación polimórfica

    public function imageable()
    {
        return $this->morphTo();
    }

    //Relación 1 a 1 polimórfica
    public function image()
    {
        return $this->morphOne(image::class, 'imageable');
    }
}
