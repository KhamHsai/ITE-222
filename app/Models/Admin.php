<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

class Admin extends Model
{
    protected $fillable = ['name', 'email', 'age'];
}
