<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Badge;
use App\Models\Student;

class Teacher extends Model
{
    use HasFactory;

    public function badge()
    {
        return $this->belongsTo(Badge::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
