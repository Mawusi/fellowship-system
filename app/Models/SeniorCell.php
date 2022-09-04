<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeniorCell extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'leader'];
}
