<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class Forum extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'post','image','status','year','course'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function like(){
        return $this->hasMany(Like::class);
    }
    public function notification(){
        return $this->hasMany(Notification::class);
    }
}
