<?php

namespace app;

use Illuminate\Database\Eloquent\Model;
use app\User;
use app\Chatroom;

class Message extends Model
{
    protected $fillable = ['room', 'sender', 'content'];

    public function sender () {
        return $this->belongsTo(User::class, 'sender');
    }

    public function room () {
        return $this->belongsTo(Chatroom::class, 'room');
    }
}