<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fb_post extends Model
{
    use HasFactory;
    protected $fillable = [
        'user',
        'type',
        'post_id'
    ];
}
