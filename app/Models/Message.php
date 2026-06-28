<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = ['conversation_id','reciever_id','sender_id','body','photo','read_at'];

    public function conversation(){
        return $this->BelongsTo(Conversation::class);
    }

}
