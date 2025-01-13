<?php

namespace App\Models\Log;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogPath extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'action', 'message', 'type' , 'ip' , 'user_agent' , 'platform'];
}
