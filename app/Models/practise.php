<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class practise extends Model
{
    use HasFactory;
    protected $fillable = ['email' , 'password'];
    
}
