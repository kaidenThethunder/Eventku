<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_event',
        'deskripsi',
        'tanggal',
        'lokasi_event',
        'harga_tiket',
        
    ];

    // Relationship with users (created_by)
    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    // Relationship with registrations
    public function registrations()
    {
        return $this->hasMany(Registration::class, 'id_event');
    }
}
