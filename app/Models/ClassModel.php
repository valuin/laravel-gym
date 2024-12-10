<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    use HasFactory;

    protected $table = 'classes'; // Nama tabel di database

    protected $fillable = [
        'city',
        'class',
        'date',
        'session',
        'name',
        'wa_number',
        'email',
    ];
}
