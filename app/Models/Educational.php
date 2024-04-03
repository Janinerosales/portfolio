<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Educational extends Model
{
    
    use HasFactory;
    protected $table = 'educationals';
    protected $primarykey ='id';
    protected $fillable = [
        'grade_level',
        'school_year',
        'school_name',
        'description'
    ];  
}
