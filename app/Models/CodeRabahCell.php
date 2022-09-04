<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CodeRabahCell extends Model
{
    use HasFactory;
    
    protected $fillable = ['senior_cell_id', 'name', 'leader'];
}
