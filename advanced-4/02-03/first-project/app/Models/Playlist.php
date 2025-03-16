<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Playlist extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'genre', 'image'];

    public function tracks()
    {
        return $this->belongsToMany(Track::class, 'tracks_playlists');
    }
}
