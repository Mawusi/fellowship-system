<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cell extends Model
{
    use HasFactory;

    protected $fillable = ['senior_cell_id', 'name', 'leader'];

    public function senior_cell(){
        return $this->belongsTo(SeniorCell::class);
    }
}
