<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //relacion uno a muchos invers
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function categoria(){
        return $this->belongsTo('App\Models\Categoria');
    }
}
