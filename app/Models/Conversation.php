<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;
    protected $fillable = ['reciever_id','sender_id'];
    public function message(){
        return $this->hasMany(Message::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
