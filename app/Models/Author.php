<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
protected $fillable = [
        'nombre',
        'ciudad de nacimiento'
    ];

    public function Books()
{
    return $this->hasMany('App\Models\Book');
}
}
