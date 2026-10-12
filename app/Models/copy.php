<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class copy extends Model
{
    use HasFactory;
 public function Users(){
        return $this->belongsToMany('App\Models\User', 'copy_customer');
    }  

public function book(){
        return $this->belongsTo('App\Models\Copy');
    } 
    
    
}
