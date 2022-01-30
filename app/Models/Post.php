<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
use SoftDeletes;
// protected $dates=['deleted_at'];
// public $timestamps = false;
protected $fillable=['title','content','file','slug'];
protected $dates=['deleted_at'];
//fillable is the list of columns that we can fill in the db and give the access to the user through it
public function run()
{
    Post::factory()
            ->count(50)

            ->create();
}
}
