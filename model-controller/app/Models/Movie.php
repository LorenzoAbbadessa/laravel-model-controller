<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';
    protected $fillable = ['title', 'genre', 'release_date'];
}
