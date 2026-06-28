<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    use HasFactory;
    protected $fillable =['course'];
    public function year()
    {
        return $this->hasMany(Year::class);
    }
    public function block()
    {
        return $this->hasMany(Block::class);
    }
    public function student()
    {
        return $this->hasMany(Course::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function subjectList(){
        return $this->hasMany(SubjectList::class);
    }
}
