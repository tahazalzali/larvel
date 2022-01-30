<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    /**
     * Get the user that owns the Profile
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public $table='users_profile';
    protected $fillable=[
        'name',	'gender',	'bio',  'url',
    ];
    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }
}
