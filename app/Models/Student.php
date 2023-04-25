<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Student extends Model
{
    use HasFactory;

    // belongstomany relation with course
    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
}
