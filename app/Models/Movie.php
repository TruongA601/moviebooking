<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'films_name', 'films_poster', 'films_length', 'films_trailer', 'films_description', 'films_release', 'films_genre',
    ];
    protected $primaryKey = 'films_id';
    protected $table = 'films';
}
