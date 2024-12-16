<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_event',
    ];

    // Relationship with users
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    // Relationship with events
    public function event()
    {
        return $this->belongsTo(Event::class, 'id_event');
    }
}
