<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    protected $fillable = [
        'name'
    ];

    // relationship with User model
    public function users()
    {
        return $this->belongsToMany(User::class, 'course_user', 'course_id', 'user_id');
    }
}
