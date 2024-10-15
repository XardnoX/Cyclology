<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rider extends Model
{
    use HasFactory;

    protected $table = 'rider'; 

    protected $fillable = ['first_name', 'last_name ', 'date_of_birth','place_of_birth','photo','weight','height']; 


}