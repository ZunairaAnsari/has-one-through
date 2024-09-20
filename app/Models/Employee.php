<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public function company(){
        return $this->hasOne(Company::class);
    }

    public function phone_numbers(){
        return $this->hasOneThrough(Phone_number::class, Company::class);
    }
}
