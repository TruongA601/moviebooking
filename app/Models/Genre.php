<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'genre_name',
    ];
    protected $primaryKey = 'genre_id';
    protected $table = 'genre';
}