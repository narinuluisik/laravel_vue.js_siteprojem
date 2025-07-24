<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = '_contact_';
    protected $fillable = [
        'address',
        'phone',
        'email',
        'map_embed',
        'working_hours',
    ];
}
