<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    protected $fillable = ['user_name', 'message', 'sender'];

    public $timestamps = true;
}
