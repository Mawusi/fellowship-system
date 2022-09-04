<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'status_id',
        'zone_id', 
        'senior_cell_id',  
        'cell_id', 

        'name', 
        'contact',
        'occupation', 
        'dob', 
        'email', 
        'location'
    ];

    public function zone(){
        return $this->belongsTo(Zone::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }
}
