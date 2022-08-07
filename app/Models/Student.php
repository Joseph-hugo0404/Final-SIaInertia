<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['student_name', 'address', 'phone_number', 'stud_id', 'year', 'fav_subject', 'school_name', 'age'];

    public function subjects(){
    return $this->hasMany('App\Models\Subject');
}

}
