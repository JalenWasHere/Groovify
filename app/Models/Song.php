<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'artist',
        'length',
        'album_id',
        'genre_id',
        'release_date',
        'cover_path',
        'song_path',
    ];
}
