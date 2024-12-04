<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'classes';

    // Kolom yang dapat diisi
    protected $fillable = ['city', 'club', 'name', 'whatsapp', 'email'];
}
