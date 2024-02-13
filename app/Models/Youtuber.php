<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Youtuber extends Model
{
    use HasFactory;

    protected $fillable = [
        'youtube_name',
        'channel_link',
        'owner_name',
        'country',
        'github'
    ];
}
