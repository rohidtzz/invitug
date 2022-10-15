<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sezione extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo','name','slug'
    ];


}
