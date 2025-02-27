<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $table = 'tracks';
    protected $fillable = [
        'name',
        'artist',
        'album',
        'length',
        'genre',
        'release_year',
        'updated_at',
        'created_at',
    ];

    
    public static function allTracks()
    {
        return self::all();
    }
    public static function createTrack(array $data)
    {
        return self::create($data);
    }

}