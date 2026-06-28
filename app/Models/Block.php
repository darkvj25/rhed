<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;
    protected $fillable = ['block','course_id','year_id'];
    public function year()
    {
        return $this->belongsTo(Year::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function student()
    {
        return $this->hasMany(Course::class);
    }

}
