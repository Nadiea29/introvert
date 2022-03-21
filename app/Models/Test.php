<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table="tests";
    protected $fillable = [
               "name",
               "email",
               "price",
               "developer",
               "massage",
               "status",
               "user_id",



    ];



}

