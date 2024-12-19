<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $table = 'registrations';
    protected $primaryKey = 'id_registrasi';

    protected $fillable = [
        'id',
        'id_event',
        'status',
        'alamat',
        'nama',
        'harga_tiket',
        'nama_event',
        'lokasi_event',
        'deskripsi'
    ];

    // Relationship with users
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    // Relationship with events
    public function event()
    {
        return $this->belongsTo(Event::class, 'id_event');
    }
}
