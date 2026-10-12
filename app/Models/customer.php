<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
protected $fillable = [
        'nombre',
        'direccion',
        'telefono'
        
    ];

    public function copies()
    {
        return $this->belongsToMany('App\Models\Copy','copy_customer');
    }
}
