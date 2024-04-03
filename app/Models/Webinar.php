<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webinar extends Model
{
    use HasFactory;
    protected $table = 'webinars';
    protected $primarykey ='id';
    protected $fillable = [
        'title',
        'agenda',
        'host_name',
        'date'
        
    ];  

}
