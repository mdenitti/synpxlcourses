<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\Teacher;

class Student extends Model
{
    use HasFactory;

    // Create an accessor to get the name of a student with the first letter uppercase
/*     public function getNameAttribute($value)
    {
        
        return "Mrs. ".ucfirst($value);
    } */ 

    public function getFullNameAttribute()
    {
        return ucfirst($this->name) . ' ' . ucfirst($this->lastname);
    }

    // Make an accessor to evaluate the gender of the student en return a pronounce
    public function getPronounceAttribute($value)
    {
        if($this->gender == 'M'){
            return 'Mr. '.$this->getFullNameAttribute();    
         } else {
            return 'Mrs. '.$this->getFullNameAttribute();
        }
    }

    // Mass assignment
    protected $guarded = [];
    // belongstomany relation with course
    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

}
