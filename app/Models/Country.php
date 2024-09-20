<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->hasManyThrough(
            Post::class,
            Student::class,
            'country_id',
            'student_id',
            'id',
            'id'
        );
    }

    public function students(){
        return $this->hasMany(Student::class);
    }
}
