<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = ['student_id','book_id', 'subject', 'class_start','class_end'];

    public function students(){
        return $this->belongsTo('App\Models\Student');
    }


}