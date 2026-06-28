<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    use HasFactory;

    protected $fillable = ['year','course_id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function block()
    {
        return $this->hasMany(Block::class);
    }
    public function student()
    {
        return $this->hasMany(Course::class);
    }

}
