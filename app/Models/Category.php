<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $casts = [

        'occupants' => 'array',
       
   ]; 
    protected $fillable = [
        
        'id',
        'name',
        'image',
        'service_num',
        'service_name',
        'Details',
        'status',


    ];
}
