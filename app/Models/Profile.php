<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';
    
    protected $fillable = [
        'user_id',
        'bio'
    ];

    // relationship with User model
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
