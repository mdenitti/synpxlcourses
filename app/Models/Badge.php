<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;

class Badge extends Model
{
    use HasFactory;

    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }
}
