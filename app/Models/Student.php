<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable =['user_id','id_number','course_id', 'year_id', 'block_id','first_name', 'last_name','middle_name','gender'];


    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function year()
    {
        return $this->belongTo(Year::class);
    }
    public function block()
    {
        return $this->belongTo(Block::class);
    }
}
