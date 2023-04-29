<?php

namespace App\Models;
use App\Http\Controllers\MessagesController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['from', 'subject', 'body', 'read'];

    public function markAsRead()
    {
        $this->read = true;
        $this->save();
    }
}
