<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    public function editorial(){
        return $this->belongsTo('App\Models\Editorial');
    }  
    
    public function author(){
        return $this->belongsTo('App\Models\Author');
    } 

     public function copies()
    {
        return $this->hasMany('App\Models\Copy');
    }
    
   

    
}
