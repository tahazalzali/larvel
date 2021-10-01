<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
protected $dates=['deleted_at'];
protected $fillable=
['title','user_id','content','image']
//fillable is the list of columns that we can fill in the db
;
}
