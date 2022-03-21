<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class developer extends Model
{
    protected $table="developer";
    protected $fillable = [
               "name",
               "category",
               "details",
               "contact",
               "image",



    ];



}

