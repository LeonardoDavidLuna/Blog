<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Relación muchos a muchos
    public function tags(){
        return $this->belogsToMany(Tag::class);
    }
    
}
