<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    
    protected $fillable = [
        'user_id',
        'title',
        'content'
    ];

    // relationship with User model
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
