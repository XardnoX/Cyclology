<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;

    protected $table = 'stage'; 

    protected $fillable = ['number', 'date', 'note','departure','arrival','distance','parcour_type','vertical_meters']; 



}